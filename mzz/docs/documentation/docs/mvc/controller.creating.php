<p>Контроллеры располагаются в директории <code>controllers</code> модуля.
Имена контроллеров должны соответствовать следующему соглашению: <code>&lt;Имя_модуля&gt;&lt;Имя_контроллера&gt;Controller</code> (todo: описать, откуда берется &lt;Имя_контроллера&gt;, а то не совсем ясно что это за имя).
Например, для модуля <code>news</code> контроллер <code>view</code> будет называться: <code>newsViewController</code>.</p>
<p>Контроллеры в ваших модулях должны наследоваться от базового абстрактного класса <code>simpleController</code>. Каждый контроллер должен реализовывать защищённый (protected) метод <code>getView()</code>.</p>
<p>Таким образом, простейшим примером может выступать следующий контроллер, возвращающий клиенту строку <code>Hello, world!</code>:</p>

<<code php>>
class helloWorldController extends simpleController
{
    protected function getView()
    {
        return 'Hello, world!';
    }
}
<</code>>

<<note>>В большинстве случаев вам не придется вручную создавать файлы и базовый код ваших контроллеров. Все эти действия выполнит встроенный в фреймворк инструмент скаффолдинга <code>devToolbar</code> (todo ссылка на тулбар)<</note>>