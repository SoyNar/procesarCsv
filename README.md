# Procesar Archivos CSV en Laravel con PHP

## Objetivo
Este repositorio tiene como objetivo estudiar el procesamiento de archivos CSV en Laravel con PHP.

## Descripción
En este proyecto se exploran algunas funciones clave de PHP para trabajar con archivos CSV, enfocándose en la lectura y procesamiento de datos sin cargar todo el archivo en memoria.

### Funciones principales utilizadas

#### 1. `fopen`
Esta función permite abrir un archivo CSV y devuelve un **resource**.

- Un *resource* es una especie de puntero que apunta al archivo en memoria.
- La posición inicial es **0** (inicio del archivo).
- Cada vez que se lee una línea, ese puntero avanza automáticamente.

#### 2. `fgetcsv`
Este método de PHP sirve para **leer una línea de un archivo CSV abierto**.

- Divide la línea en columnas usando el separador por defecto (`,`).
- Devuelve un **array indexado**, donde cada índice corresponde a una columna de esa línea (fila).
- Cada valor es el contenido de esa columna como cadena de texto (*string*).
- Cada vez que llamas a `fgetcsv($handle)`, lee la siguiente línea hasta llegar al final del archivo (**EOF**).
- Cuando ya no hay más líneas, devuelve `false`.

##### Argumentos principales
- `$stream`: El resource que obtienes de `fopen()`.
- `$length` (opcional): Número máximo de bytes a leer.
    - Si se omite o se coloca en `0`, lee toda la línea hasta encontrar un salto de línea.
    - Es útil para optimizar memoria en archivos muy grandes.
- `$separator` (opcional): El delimitador de las columnas. Por defecto `,`. También puedes usar `;`, `	` (tabulador), `|`, etc.
- `$enclosure` (opcional): El carácter que encierra valores que contienen separadores. Por defecto `"`.  
  Ejemplo: `"Hola, mundo"` se interpretará como una sola columna, no como dos.
- `$escape` (opcional): El carácter de escape para valores especiales. Por defecto `\`.

#### Ejemplo de uso

```php
$handle = fopen("datos.csv", "r");

while (($data = fgetcsv($handle, 1000, ";")) !== false) {
    print_r($data);
}

fclose($handle);
```

#### Firma de la función

```php
fgetcsv(
    resource $stream,
    ?int $length = 0,
    string $separator = ",",
    string $enclosure = """,
    string $escape = "\"
): array|false
```

## Notas
- `fgetcsv()` es ideal para leer archivos línea por línea sin cargarlos completamente en memoria.
- Si necesitas procesar archivos muy grandes, esta es la forma recomendada.
- Puedes combinarlo con Laravel Jobs o Queues para procesamiento asíncrono.
