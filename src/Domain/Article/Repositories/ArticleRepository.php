<?php

namespace Domain\Article\Repositories;

use Domain\Article\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function all()
    {
       return $this->query()->latest()->get();
    }

    public function store($request)
    {
        return $this->query()->create([
            'title' => $request->title,
            'body' => $request->body,
            'commentCount' => $request->commentCount,
        ]);
    }

    public function update($request, $id)
    {
        return $this->query()->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
            'commentCount' => $request->commentCount,
        ]);
    }

    public function edit($id)
    {
        return $this->query()->findOrFail($id);
    }

    public function destroy($id)
    {
        return $this->query()->where('id', $id)->delete();
    }

    private function query()
    {
        return Article::query();
    }
}
