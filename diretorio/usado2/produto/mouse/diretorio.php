<?php 

$caminho = 'usado2/produto/mouse';
$diretorio = dir($caminho);

if (is_dir($diretorio)) { 
    while($arquivo = $diretorio -> read()){
        echo "Caminho completo: ".$caminho.$arquivo." Arquivo: ".$arquivo."";
        $explodeRealizado = explode('.log', $arquivo);
        
        if ($explodeRealizado[1] == '.log'){
            $caminhoComArquivo = "".$caminho."".$arquivo."";
            
            rm($caminhoComArquivo);
        }
    }
    
    $diretorio -> close();
}