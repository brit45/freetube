<?php declare(strict_types=1);

namespace APP\Core\View;

use APP\Config\Global_conf;

class Responce {

    public string $Render_Method  = "";
    public string $Path_Layout    = "";
    public string $Path_Templante = "";
    public array  $Data = [];

    public function __construct(string $responce,array $data = [], string $Template = Global_conf::STANDART_TEMPLATE) {

        if(preg_match('/([a-zA-Z0-9]+)@([a-zA-Z0-9]+)/',$responce, $result)) {

            $this->Render_Method  = "TEMPLATE@VIEW";
            $this->Path_Layout    = $result[1].'/'.$result[2];
            $this->Path_Templante = $Template;
            $this->Data           = $data;

            ob_start();

            extract($data);
            require_once Global_conf::TEMPLATE_DIR."{$result[1]}/{$result[2]}.view.php";

            $View_Generating_Content = ob_get_clean();

            require_once Global_conf::STANDART_TEMPLATE;

            header('OK',true, 200);

        }
    }
}