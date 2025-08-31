<?php

namespace App\Domain\Services;

use App\Domain\Entities\Cliente;
use App\Domain\Repositories\ClienteRepositoryInterface;
use App\Domain\Repositories\SaldosRepositoryInterface;

class ProcesarCsvService
{
    private  $clienteRepository;
    private $saldosRepository;
    public function __construct(
        ClienteRepositoryInterface $clienteRepository,
        SaldosRepositoryInterface $saldosRepository)
    {
         $this->clienteRepository = $clienteRepository;
         $this->saldosRepository = $saldosRepository;
    }

    public function procesar($file)
    {
        //abrir el archivo
        $handle = fopen($file, 'r');
        // leer la primera fila
        $header = fgetcsv($handle);

        $rowCount = 0;
        //recorrerlo por filas
        while(($row = fgetcsv($handle)) !== false){

            //$row: Es un array que contiene los valores de una fila del CSV, separado por columnas.
            // Cada posición ($row[0], $row[1], $row[2], etc.) corresponde a una columna.

            // ejemplo:
            // $row = fgetcsv($handle)
            $rowCount++;
            // normalizar 010 con ltrim que
            //Elimina los espacios (u otros caracteres) del inicio de un string
            // en la posicion 0 de la fila esta id cliente
            // digamos que un escriben id 010, normalizarlo quitando el 0 del inicio
        $clienteId = (int) ltrim($row[0],'0');

        //bverificar si el cliente existe
            // usamos continue para saltarse la ejecución del código restante
            // en la iteración actual y pasar directamente a la siguiente iteración del bucle.
            if(!$this->clienteRepository->findById($clienteId)){
                continue;
            }
            //extraemos los saldos
            $saldos  = [
                1 => (float)$row[2],
                2 => (float)$row[3],
                3 => (float)$row[4],
            ];
            //ahora guardamos los saldos en la base de datos
            $this->saldosRepository->saveSaldo($clienteId, $saldos);
        }
        //cerramos el archivo
        fclose($handle);
        return $rowCount;

    }



}
