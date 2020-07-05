<?php
interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear($pg);
    public function avancarPag();
    public function voltarPag();
    public function marcarPag();
}
