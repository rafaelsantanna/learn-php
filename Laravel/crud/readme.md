Documentação Traduzida:
https://github.com/rhchristian/laravel-docs-pt-br

Link do Curso:
https://www.youtube.com/watch?v=azrw0l8uP5c&list=PLInBAd9OZCzylabwvLeJIa9gxbS7MmzNY

Imports para fazer no Projeto:

Esta Facade é para você poder Utilizar formulário na view utilizando blade.
Link da Facade: https://laravelcollective.com/docs/5.3/html
Adicionar a linha "laravelcollective/html":"5.2.*" no arquivo composer.json(Lembrando que a versão deste Facade deve ser igual a versão do laravel) e depois execute no terminal composer update para baixar este pacote, depois disso adicione o 'Provider'(abra o config/app.php e coloque o 'provider' no fim antes de fechar o array e depois disso adicione as classes 'aliases').

Algumas Regras do Laravel e Eloquent(ORM)

nomeController

Nome do model SEMPRE no Singular e nome da tabela sempre no plural se você quiser utilizar um nome diferente de tabela sem ser no plural você deve escrever dentro do Model isso, por exemplo: protected $table = 'nome_tabela';

O Eloquent sempre utilizar a primary key id como padrão, se voce quiser colocar uma primary diferente disso, você também tem que especificar no Model, exemplo: protected $primaryKey = 'codigo';

Dentro da pasta views tem a pasta layout que ficam o header e o footer do site no arquivo app.blade.php.

----------------------------------------------------------------------------------------------------------------------------------
php artisan list (Listar comandos)

php artisan app:name SeuNameSpace (Caso queira alterar o nameSpace Padrão que é App para o seu)

php artisan serve (Roda a aplicação)

php artisan make:controller nomeController
php artisan make:model Cliente
php artisan make:auth //Cria toda a estrutura de Login, você só deve adicionar uma rota para abrir a página de login na Raiz
php artisan make:migration nome_migration --create=nomeTabela (criar arquivo migration, o --create já cria o schema já com Id e o timestamp) //timestamp serve para que a cada inserção ele guarde a data de quando foi feito, ele cria uma coluna na tabela só para guardar isso.

php artisan migrate (rodar todos os arquivos migrates da pasta)
php artisan migrate:rollback (volta a ultima versão(batch) de migrations)

//Inicio Tinker
php artisan tinker (É uma interface de linha de comando onde podemos acessar ao projeto e fazer testes por exemplo criar um variavel que vai persistir dados no banco.

//Recebendo o modelo(Quando mexer no controller não precisa passar o 'App', somente 'Cliente', só passamos o caminho completo porque estamos no tinker
$cliente = new App\Cliente;
$cliente->nome = 'Nome Cliente;
$cliente->endereco = 'rua tal';
$cliente->save(); persiste no banco

// Passando o array completo
// Para passar um array completo com o ::create nós precisamos setar no $fillable quais campos podemos enviar.
$cliente2 = App\Cliente::create(['nome' => 'Cliente 2', 'endereo' => 'Rua tal', 'numero' => '124']);
$cliente2->save();
$cliente2 = App\Cliente::find(2); //Procurando o Cliente com o ID número 2;

//Este metodo $fillable define os campos do formulário que podem ser preenchidos
//Se tiver um campo no banco tipo_usuário e ele não estiver no fillable então uma tentativa do usuário mal intencionado mudar o tipo de usuário dele via get não vai ser sucedida.

//FInal Tinker

//Para utilizar o Ajax é só retornar um Json para a view, exemplo:
public function lista() 
{
	$variavel = [0=>'teste', 1=>'teste']; //Json que irá ser retornado para o Ajax.
	return $variavel;
}

Procurar como fazer no laravel:
-Validação dos Dados;
-Relacionar os Models;
-Database seeders;(São classes que servem para inserir dados no DB de forma automatizada).
-middleware;
-Receber Requisição Ajax com Laravel;
