<?php


namespace Nexmo\Post\repositories;


use Nexmo\Post\Models\Post;

class PostRepo
{

    public function postIndex()
    {
        return Post::paginate(6);
    }

    public function infoStore($vlau)
    {
        $file = $vlau->file('image');
        if (!empty($file)) {
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/post/', $image);
        }
        Post::create([
            'title' => $vlau->title,
            'alt' => $vlau->alt,
            'subject' => $vlau->subject,
            'author' => $vlau->author,
            'description' => $vlau->description,
            'image' => $image,
            'keywords' => $vlau->keywords,
            'body' => $vlau->body
        ]);
    }

    public function postEdit($id)
    {
        return Post::findOrFail($id);
    }

    public function postUpdate($value,$id)
    {
        $file = $value->file('image');
        $post = Post::findOrFail($id);
        if (!empty($file)) {
            if (file_exists('images/post/' . $post->image)) {
                unlink('images/post/' . $post->image);
            }
            $image = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/post/', $image);
        } else {
            $image = $post->image;
        }
        $post->update([
            'image' => $image,
            'title' => $value->title,
            'alt' => $value->alt,
            'body' => $value->body,
            'subject' => $value->subject,
            'author' => $value->author,
            'description' => $value->description,
            'keywords' => $value->keywords
        ]);
    }

    public function postDestroy($id)
    {
        $post = Post::findOrFail($id);
        $postImage = $post->image;
        if (file_exists('images/post/' . $postImage)) {
            unlink('images/post/' . $postImage);
        }
        Post::destroy($id);
    }

}
