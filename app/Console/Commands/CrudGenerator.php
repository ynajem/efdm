<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CrudGenerator extends Command
{

    protected $signature = 'crud:make {name : Class (singular), e.g User}';

    protected $description = 'Create CRUD operations';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->argument('name');
        $this->controller($name);
        $this->model($name);
        $this->request($name);
        $this->views($name);

        File::append(base_path('routes/web.php'), 'Route::resource(\'' . Str::plural(strtolower($name)) . "', '{$name}Controller');");
        // Artisan::call('make:migration create_' . strtolower(Str::plural($name)) . '_table --create=' . strtolower(Str::plural($name)));
    }

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function createFile($path, $template)
    {
        if (!file_exists($path))
            file_put_contents($path, $template);
    }

    protected function createDir($path)
    {
        if (!file_exists($path))
            mkdir($path, 0777, true);
    }

    protected function createTemplate($type, $name)
    {
        $template = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name, // Place
                strtolower(Str::plural($name)), // places,
                strtolower($name) // place
            ],
            $this->getStub($type)
        );
        return $template;
    }

    protected function model($name)
    {
        $template = $this->createTemplate('Model', $name);
        $this->createFile(app_path("/{$name}.php"), $template);
    }

    protected function request($name)
    {
        $template = $this->createTemplate('Request', $name);
        $this->createDir(app_path('/Http/Requests'));
        $this->createFile(app_path("/Http/Requests/Store{$name}Request.php"), $template);
    }

    protected function controller($name)
    {
        $template = $this->createTemplate('Controller', $name);
        $this->createFile(app_path("/Http/Controllers/{$name}Controller.php"), $template);
    }

    protected function views($name)
    {
        $viewDir = resource_path("views/" . strtolower(Str::plural($name)));
        $this->createDir($viewDir);

        $createTemplate = $this->createTemplate('CreateView', $name);
        $indexTemplate = $this->createTemplate('IndexView', $name);
        $editTemplate = $this->createTemplate('EditView', $name);
        $showTemplate = $this->createTemplate('ShowView', $name);

        $this->createFile($viewDir . "/index.blade.php", $indexTemplate);
        $this->createFile($viewDir . "/create.blade.php", $createTemplate);
        $this->createFile($viewDir . "/edit.blade.php", $editTemplate);
        $this->createFile($viewDir . "/show.blade.php", $showTemplate);
    }
}
