<?php 

$caminho = 'C:\Users\Usuario\diretorio\usado2\produto\mouse';
$diretorio = dir($caminho);

// if (is_dir($caminho)) { 
    while($arquivo = $diretorio -> read()){
        $explodeRealizado = explode('.', $arquivo);
            //echo print_r($explodeRealizado);

            //if (empty($explodeRealizado)){ 
                echo 'cheguei aqui';
            if ($explodeRealizado[1] == 'log'){
                $caminhoComArquivo = "".$caminho."\\".$arquivo.""; 

                echo $caminhoComArquivo;
            
                unlink($caminhoComArquivo);

            }
        //}
    }
    
    $diretorio -> close();
//}