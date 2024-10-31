<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     title="Título da Sua API",
 *     version="1.0.0",
 *     description="Descrição da sua API"
 * )
 */

class HelloController extends Controller
{
    /**
     * @OA\Get(
     *     path="/hello",
     *     tags={"Hello"},
     *     summary="Retorna 'Hello World'",
     *     @OA\Response(
     *         response=200,
     *         description="Uma mensagem de saudação",
     *         @OA\Schema(
     *             type="string",
     *             example="Hello World"
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erro interno do servidor"
     *     )
     * )
     */
    public function index()
    {
        return 'Hello World Laravel';
    }

    /**
     * @OA\Post(
     *     path="/hello/store",
     *     tags={"Hello"},
     *     summary="Salva algo teste swagger",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="string", example="Salva algo teste swagger")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Uma mensagem de confirmação",
     *         @OA\Schema(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Recurso salvo com sucesso!")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Requisição inválida"
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Acesso negado"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erro interno do servidor"
     *     )
     * )
     */
    public function store(Request $request)
    {
        return response()->json(['message' => 'Recurso salvo com sucesso!']);
    }

    /**
     * @OA\Get(
     *     path="/hello/create",
     *     tags={"Hello"},
     *     summary="Exibe o formulário para criar um novo recurso",
     *     @OA\Response(
     *         response=200,
     *         description="Retorna o formulário para criação",
     *         @OA\Schema(
     *             type="string",
     *             example="Formulário de criação exibido com sucesso!"
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erro interno do servidor"
     *     )
     * )
     */
    public function create()
    {
        // Exibe o formulário para criar um novo recurso
    }

    /**
     * @OA\Get(
     *     path="/hello/{id}",
     *     tags={"Hello"},
     *     summary="Exibe um recurso especificado",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Retorna os detalhes do recurso especificado",
     *         @OA\Schema(
     *             type="object",
     *             @OA\Property(property="data", type="string", example="Detalhes do recurso exibidos com sucesso!")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Recurso não encontrado"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erro interno do servidor"
     *     )
     * )
     */
    public function show($id)
    {
        // Exibe o recurso especificado
    }

    /**
     * @OA\Get(
     *     path="/hello/{id}/edit",
     *     tags={"Hello"},
     *     summary="Exibe o formulário para editar um recurso especificado",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Retorna o formulário de edição do recurso especificado",
     *         @OA\Schema(
     *             type="string",
     *             example="Formulário de edição exibido com sucesso!"
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Recurso não encontrado"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erro interno do servidor"
     *     )
     * )
     */
    public function edit($id)
    {
        // Exibe o formulário para editar o recurso especificado
    }

    /**
     * @OA\Put(
     *     path="/hello/{id}",
     *     tags={"Hello"},
     *     summary="Atualiza um recurso especificado",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="data", type="string", example="Atualiza dados do recurso")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Recurso atualizado com sucesso",
     *         @OA\Schema(
     *             type="object",
     *             @OA\Property(property="message", type="string", example="Recurso atualizado com sucesso!")
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Requisição inválida"
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Acesso negado"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Recurso não encontrado"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erro interno do servidor"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        // Atualiza o recurso especificado
    }

    /**
     * @OA\Delete(
     *     path="/hello/{id}",
     *     tags={"Hello"},
     *     summary="Remove um recurso especificado",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=204,
     *         description="Recurso removido com sucesso"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Recurso não encontrado"
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Erro interno do servidor"
     *     )
     * )
     */
    public function destroy($id)
    {
        // Remove o recurso especificado
    }
}
