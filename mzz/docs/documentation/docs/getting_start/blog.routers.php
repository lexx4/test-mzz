<p>
	Маршрутизация (Routing) - это процесс поиска подходящего роута и превращения с его помощью 
	запрошенного пути в обычный массив. Правила маршрутизации хранятся в файле 
	<tt>&lt;project_folder&gt;/routers/default.php</tt> и могут быть переопределены. 
	Так же у модулей могут быть указаны свои правила маршрутизации, которые могут быть описаны в 
	классе модуля в файле <tt>modules/&lt;module&gt;/&lt;module&gt;Module.php</tt>.
</p>

<p>В <tt>modules/blog/blogModule.php</tt> мы добавим простой роут обработки путей для конкретной записи в блоге:</p>


<<code php>>
public function getRoutes()
{
    return array(
        array(),
        array(
            'blogPost' => new requestRoute('blog/:name/:action', array(
                'module' => 'blog',
                'action' => 'view'), array(
                'name' => '.*?',
                'action' => '(?:create)'))));
}
<</code>>


<p>Этот метод возвращает массив из двух элементов: первый содержит роуты, которые будут вызываны после других и второй - перед остальными. Этот простой роут определяет правила для разбора пути вида "blog/first_blog_entry". В MZZ по умолчанию определены некоторые стандартные роуты, в том числе и для обработки путей вида module/name/action (withAnyParam). Смысл создания нашего в том, чтобы роутер знал что "blog/create" это создание новой записи, а не просмотр записи с именем "create". </p>