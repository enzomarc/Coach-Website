<?php

namespace App\Controllers;

use App\Flash;
use App\Models\Author;
use App\Models\Post;

class PostsController
{

    public function index()
    {

    }

    public function create()
    {
        if (session_get('logged_in') == true) {
            $author = session_get('author');
            return view('blog.author.write', ['author' => $author]);
        }
    }

    public function store()
    {
        $datas = input();
        $datas['author'] = intval(session_get('author')->id);
        $datas['public'] = 0;
        $datas['content'] = htmlspecialchars($datas['content']);

        $upload_path = dirname(__DIR__) . '/../public/uploads/posts_bg/';

        if (upload($_FILES['image'], $upload_path)) {
            $datas['image'] = session_get('uploaded');
            $post = new Post($datas);

            if ($post->save()) {
                Flash::set("Article créé avec succès. N'oubliez pas de le publier.");
            } else {
                Flash::set("Une erreur est survenue lors de l'ajout de l'article.");
            }
        } else {
            Flash::set("Impossible d'utiliser cette image pour l'article. Veuillez sélectionner une autre image.");
        }

        return redirect('author');
    }

    public function show($id)
    {
        $post = Post::find('id', $id);
        $author = Author::find('id', $post->author);

        return view('blog.post', ['post' => $post, 'author' => $author]);
    }

    public function edit($id)
    {
        if (session_get('logged_in') == true) {
            $author = session_get('author');
            $post = Post::find('id', $id);
            $post->imagePath = dirname(__DIR__) . '/../public/uploads/posts_bg/' . $post->image;
            return view('blog.author.edit', ['author' => $author, 'post' => $post]);
        }
    }

    public function update($id)
    {
        if (session_get('logged_in') == true) {
            $author = session_get('author');
            $post = Post::find('id', $id);

            if ($_FILES['image']['name'] != "") {
                $image = $_FILES['image'];
            }

            $post->author = $author->id;
            $post->title = input('title');
            $post->description = input('description');
            $post->content = htmlspecialchars(input('content'));

            if (isset($image)) {

                if (upload($image, $upload_path)) {
                    $post->image = session_get('uploaded');

                    if ($post->update()) {
                        Flash::set("Article mis à jour avec succès.");
                    } else {
                        Flash::set("Une erreur est survenue lors de la modification de l'article.");
                    }
                } else {
                    Flash::set("Impossible d'utiliser cette image pour l'article. Veuillez sélectionner une autre image.");
                }

            } else {

                if ($post->update()) {
                    Flash::set("Article mis à jour avec succès.");
                } else {
                    Flash::set("Une erreur est survenue lors de la modification de l'article.");
                }

            }

        }

        return redirect('author');
    }

    public function destroy($id)
    {
        $post = Post::find('id', $id);

        if ($post->delete()) {
            Flash::set("Article supprimé avec succès.");
        } else {
            Flash::set("Une erreur est survenue lors de la suppression de l'article.");
        }

        return redirect('author');
    }

    public function publish($id)
    {
        $post = Post::find('id', $id);
        $post->public = $post->public == '1' ? '0' : '1';

        if ($post->update()) {
            if ($post->public == '0')
                Flash::set("Vous avez retiré l'article en ligne.");
            else
                Flash::set("Article publié avec succès.");
        } else {
            Flash::set("Une erreur est survenue lors de la publication de l'article.");
        }

        return redirect('author');
    }

}