<?php

namespace Crellan\PdoCrud\Controllers;

use Crellan\PdoCrud\Core\View;
use Crellan\PdoCrud\Models\Product;

class ProductController
{

    public function index()
    {
        $db = new Product();
        $data['products'] = $db->getAllProducts();
        View::load('products/index', $data);
    }

    //adiciona novos produtos -  vizualização da página de adicionar produtos
    public function add()
    {
        View::load('products/add');
    }

    /*
     * Pega os dados do formulário de cadastro de produtos, persisti os dados no banco, devolve o usuário para a página
    com um uma variável que sucesso ou erro para ser usado no alert.
     */
    public function store()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $quant = $_POST['quant'];

            $db = new Product();
            if ($db->insertProduct($name, $price, $description, $quant)) {
                View::load('products/add', ["sucess" => "Item adiciona com sucesso!"]);
            } else {
                View::load('products/add', ["error" => "Ops, algo deu errado ao cadastrar o item."]);
            }
        }
    }

    public function edit($id)
    {
        $db = new Product();
        if ($db->getRow($id)) {
            $data['row'] = $db->getRow($id);
            View::load("products/edit", $data);
        } else {
            echo "Error";
        }
    }

    public function update($id)
    {

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $quant = $_POST['quant'];

            $db = new Product();
            if ($db->updateProduct($name, $price, $description, $quant, $id)) {
                View::load('products/edit', ["sucess" => "Item atualizado com sucesso", "row" => $data['row'] = $db->getRow($id)]);
            } else {
                View::load('products/edit', ["error" => "Não foi possível atualizar o item"]);
            }

        }

    }

    public function delete($id)
    {

        $db = new Product();
        if ($db->deleteProduct($id)) {
            View::load("products/delete", ["sucess" => "Deletado com sucesso!"]);
        } else {
            View::load("products/delete", ["error" => "Falha ao deletar o item."]);
        }
    }
}