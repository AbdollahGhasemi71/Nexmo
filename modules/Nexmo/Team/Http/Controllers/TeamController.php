<?php

namespace Nexmo\Team\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Nexmo\Common\Session\SessionFlash;
use Nexmo\Team\Http\Requests\createTeamRequest;
use Nexmo\Team\Models\Team;
use Nexmo\Team\repositories\TeamRepo;

class TeamController extends Controller
{
    public $repo;

    public function __construct(TeamRepo $teamRepo)
    {
        $this->repo = $teamRepo;

    }

    public function index()
    {
        $team = $this->repo->teamIndex();
        return view('Team::team.index', compact('team'));
    }

    public function create()
    {
        return view('Team::team.create');
    }


    public function store(createTeamRequest $request)
    {

        $this->repo->teamStore($request);
        SessionFlash::store();
        return redirect(route('team.create'));
    }


    public function edit($id)
    {
        $team = $this->repo->teamEdit($id);
        return view('Team::team.edit', compact('team'));
    }


    public function update(Request $request, $id)
    {
        $this->repo->teamUpdate($request,$id);
        SessionFlash::update();
        return redirect(route('team.index'));
    }

    public function destroy($id)
    {
       $this->repo->teamDestroy($id);
        SessionFlash::delete();
        return redirect(route('team.index'));
    }
}
