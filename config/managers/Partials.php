<?php
/*
 * @version 2
 * @link https://raw.github.com/Opine-Org/Semantic-CM/master/available/Partials.php
 * @mode upgrade
 *
 */
namespace Manager;

class Partials {
    public $collection = 'Collection\Partials';
    public $title = 'Content Partials';
    public $titleField = 'title';
    public $singular = 'Content Partial';
    public $description = '{{count}} blurbs';
    public $definition = 'Partials are small blocks of content that can be embedded in website pages.';
    public $acl = ['content', 'admin', 'superadmin'];
    public $icon = 'basic content';
    public $category = 'Content';
    public $after = 'function';
    public $function = 'ManagerSaved';
    
    function titleField () {
        return [
            'name'          => 'title',
            'placeholder'   => 'Title',
            'required'      => true,
            'display'       => 'Field\InputText'
        ];
    }

    function bodyField () {
        return [
            'name'          => 'body',
            'required'      => false,
            'display'       => 'Field\Redactor'        
        ];
    }

    public function code_nameField () {
        return [
            'name'          => 'code_name',
            'display'       => 'Field\InputText',
            'required'      => true
        ];
    }

    public function languageField () {
        return [
            'name'          => 'language',
            'required'      => false,
            'options'       => function () {
                return $this->db->fetchAllGrouped(
                    $this->db->collection('languages')->
                        find()->
                        sort(['name' => 1]),
                    'code_name', 
                    'name');
            },
            'display'       => 'Field\InputToTags',
            'controlled'    => true,
            'multiple'      => false
        ];
    }

    public function indexPartial () {
        $partial = <<<'HBS'
            <div class="top-container">
                {{{ManagerIndexHeader metadata=metadata pagination=pagination}}}
            </div>

            <div class="bottom-container">
                {{#if partials}}
                    {{{ManagerIndexPagination pagination=pagination}}}
                    {{{ManagerIndexButtons metadata=metadata}}}
                    <table class="ui large table segment manager sortable">
                        <col width="50%">
                        <col width="20%">
                        <col width="20%">
                        <col width="10%">
                        <thead>
                            <tr>                       
                                <th>Title</th>
                                <th>Code</th>
                                <th>Language</th>
                                <th class="trash">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{#each partials}}
                                <tr data-id="{{dbURI}}">        
                                    <td>{{title}}</td>
                                    <td>{{code_name}}</td>
                                    <td>{{language}}</td>
                                    <td>
                                        <div class="manager trash ui icon button">
                                             <i class="trash icon"></i>
                                         </div>
                                     </td>
                                </tr>
                            {{/each}}
                        </tbody>
                    </table>
                    {{{ManagerIndexPagination pagination=pagination}}}
                {{else}}
                    {{{ManagerIndexBlankSlate metadata=metadata}}}
                {{/if}}
            </div>
HBS;
        return $partial;
    }

    public function formPartial () {
        $partial = <<<'HBS'
            {{{ManagerForm spare=id_spare metadata=metadata}}}
                <div class="top-container">
                    {{{ManagerFormHeader metadata=metadata}}}
                    {{{ManagerFormTabs metadata=metadata}}}
                </div>
                <div class="bottom-container">
                    <div class="ui tab active" data-tab="Main">
                        {{{ManagerFormMainColumn}}}
                            {{{ManagerField . class="left" name="title" label="Title" required="true"}}}
                            {{{ManagerField . class="left" name="body" required="true"}}}
                            {{{ManagerField . class="left" name="code_name" required="true"}}}
                            {{{id}}}
                            {{{form-token}}}
                        {{{ManagerFormMainColumnClose}}}
                        {{{ManagerFormSideColumn}}}
                            {{{ManagerFormButton modified=modified_date}}}
                            {{{ManagerField . name="language" class="fluid" label="Language"}}}
                        {{{ManagerFormSideColumnClose}}}
                    </div>
                </div>
            </form>
HBS;
        return $partial;
    }
}