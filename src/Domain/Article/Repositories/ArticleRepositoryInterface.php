<?php

namespace Domain\Article\Repositories;

interface ArticleRepositoryInterface
{
    public function all();

    public function store($request);

    public function update($request, $id);

    public function destroy($id);

    public function edit($id);
}
