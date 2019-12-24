<?php
use Dompdf\Dompdf;
class PdfService extends Question{
    private $domPdf;
    private $smarty;

    public function __construct()
    {
        //$this->domPdf = new Dompdf();
        $this->smarty = new Smarty;
        $this->smarty->caching = false;
        $this->smarty->compile_check = true;

    }
    public function generate($type="view",$fileName="resultado"){
        $resultados = $this->getResultPollVictima();


        $this->smarty->assign('encuestas', $resultados);
        $dompdf = new Dompdf();
        ob_clean();
        $html = $this->smarty->fetch(DOC_ROOT.'/templates/reports/poll-result-pdf.tpl');
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        if($type == 'download') {
            $dompdf->stream($fileName.'.pdf');
        } else if($type == 'view') {
            $dompdf->stream($fileName.'.pdf', array("Attachment" => false));
        } else {
            return $dompdf->output();
        }
        exit(0);
    }
}



