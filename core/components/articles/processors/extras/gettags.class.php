<?php
/**
 * @package articles
 * @subpackage processors
 */
class ArticleExtrasGetTagsProcessor extends modObjectGetListProcessor {
    public $checkListPermission = true;


    public function process() {
        $container = $this->getProperty('container', false);
        if(!$container){
            return false;
        }

        $parent = $this->modx->getObject(modResource::class, $container);
        if(!$parent){
            return false;
        }

        $articles = $parent->getMany('Children', ['deleted' => 0]);
        $articleIDs = [];
        foreach($articles as $article){
            $articleIDs[] = $article->id;
        }

        $templateVariable = $this->modx->getObject(modTemplateVar::class, ['name' => 'articlestags']);
        if(!$templateVariable){
            return false;
        }

        $c = $this->modx->newQuery(modTemplateVarResource::class);

        $c->where([
                       'tmplvarid' => $templateVariable->id,
                       'contentid:IN' => $articleIDs
        ]);

        $tagsObject = $this->modx->getCollection(modTemplateVarResource::class, $c);
        $tags = [];

        foreach($tagsObject as $tagObject){
            $addTags = explode(',',$tagObject->value);
            foreach($addTags as &$addTag){
                $addTag = trim($addTag);
            }
            $tags = array_merge($tags, $addTags);
        }

        $tags = ArticlesService::arrayUnique($tags);
        sort($tags);
        $returnArray = [];
        foreach($tags as $tag){
            $returnArray[] = [$tag];
        }

        return $this->success('', $returnArray);
    }

}
return ArticleExtrasGetTagsProcessor::class;