<?php 

    try{
        //onde possa acontecer um possivel erro
        //se nao tiver erro o try continua
        echo "<h3>Tente novamente</h3>";

        $sql = 'Select * from clientes';
        //mysql_query($sql);

        if (!file_exists('require_arquivo_a.php')) {
            throw new Exception('o arquivo deveria estar disponivel as' . date('d/m/Y h:i:s') . ' horas mas nao estava, vamos seguir mesmo assim');
        }

    } catch (Error $e) {
        echo "<h3>Catch</h3>";
        echo $e;
        //o catch serve para mostrar e tratar o erro para o codigo nao morrer
        //com o erro produzido, aparece o catch
    }
    catch (Exception $e) {
        //aqui eu quero capturar uma exception
        echo "<h3>Exception</h3>";
        echo $e;
    }
    
    // finally {
    //     echo "<h3>Finalmente</h3>";
    // }
//nao precisa do finally se tiver o catch
?>