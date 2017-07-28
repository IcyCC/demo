<?php

namespace App\Http\Controllers\ArticleAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Tag;
use App\Http\Requests\TagCreateRequest;
use App\Http\Requests\TagUpdateRequest;
class TagController extends Controller
{
    protected $fields = [
        'tag' => '',
        'title' => '',
        'subtitle' => '',
        'meta_description' => '',
        'page_image' => '',
        'layout' => 'blog.layouts.index',
        'reverse_direction' => 0,
    ];

    /**
     * Show form for creating new tag
     */
    public function create()
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
            $data[$field] = old($field, $default);
        }

        return view('articleadmin.tag.create', $data);
    }

    // 替换 index 方法如下
    public function index()
    {
        $tags = Tag::all();
        return view('articleadmin.tag.index')->withTags($tags);
    }

    /**
     * Store the newly created tag in the database.
     *
     * @param TagCreateRequest $request
     * @return Response
     */

    public function store(TagCreateRequest $request)
    {
        $tag = new Tag();
        foreach (array_keys($this->fields) as $field) {
            $tag->$field = $request->get($field);
        }
        $tag->save();

        return redirect('/articleAdmin/tag')
            ->withSuccess("The tag '$tag->tag' was created.");
    }

    /**
     * Show the form for editing a tag
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        $data = ['id' => $id];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $tag->$field);
        }

        return view('articleadmin.tag.edit', $data);
    }

    /**
     * Update the tag in storage
     *
     * @param TagUpdateRequest $request
     * @param int $id
     * @return Response
     */
    public function update(TagUpdateRequest $request, $id)
    {
        $tag = Tag::findOrFail($id);

        foreach (array_keys(array_except($this->fields, ['tag'])) as $field) {
            $tag->$field = $request->get($field);
        }
        $tag->save();

        return redirect("/articleAdmin/tag/$id/edit")
            ->withSuccess("Changes saved.");
    }

    /**
     * Delete the tag
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect('/articleAdmin/tag')
            ->withSuccess("The '$tag->tag' tag has been deleted.");
    }
}
