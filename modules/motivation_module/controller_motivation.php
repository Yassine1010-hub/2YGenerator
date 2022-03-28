 
<?php

//nous avons utilisé la bibliothéque TCPDF de Nicolaasuni: https://github.com/tecnickcom/TCPDF
@require_once('view_motivation.php');
@require_once('modele_motivation.php');
@require_once('classes/connexion.php');
            
class ControllerMotivation extends Connexion{
            
    private $view;
    private $model;

    public function __construct(){
        $this->view = new ViewMotivation();
         $this->model = new ModeleCV();
    

    }

    public function generator(){
    	$this->view->generator();
    }



    public function myCv($name){
        echo "okok";

        $filename = 'cv-'.$name.'.pdf';

        echo $filename;

        // Header content type
        header('Content-type: application/pdf');
          
        header('Content-Disposition: inline; filename="' . $filename . '"');
          
        header('Content-Transfer-Encoding: binary');
          
        header('Accept-Ranges: bytes');
          
        // Read the file
        @readfile($filename);
       
    }



    public function add(){
        $uri  = "cv-".$_POST['name'];

        $sql= parent::$bdd->prepare("INSERT into CV(nomCv, URI)  VALUES (?,?)");
        var_dump($uri);


        $sql->execute(array($_POST['name'], $uri));

        $this->model->addInfo();
        ob_start();
    	?>
    	<div class="cv">
            <div class="name">
                <h4><?php echo strtoupper($_POST['surname']) . ' ' . $_POST['name'] ?></h4>
                <h3> <?php echo $_POST['target'] ?></h3>
            </div>

            <div class="target">
                <h4> Mes informations : </h4>
                <p> <?php echo $_POST['adress'] ?></p>
                <p> <?php echo $_POST['phone'] ?></p>
                <p> <?php echo $_POST['dateBirth'] ?></p>
                <p> <?php echo $_POST['mail'] ?></p>
            </div>

            <div class="xp">
                <div class="xp-1 xp-card">
                     <h4> <strong>Mes expériences:</h4>
                    <h4> <?php echo $_POST['title-xp-1'].":" ?></h4>
                     <h5> Lieu :</h5>
                    <p> <?php echo $_POST['text-xp-1'] ?></p>

                </div>
                <div class="xp-2 xp-card">
                    <h4> <?php echo $_POST['title-xp-2'] ?></h4>
                    <h5> Lieu :</h5>
                    <p> <?php echo $_POST['text-xp-2'] ?></p>
                </div>
            </div>
            <div class="school">
                 <h4> <strong>Mes formations:</h4>
                <div class="school-1 school-card">
                    <h5> <?php echo $_POST['title-form-1'] ?></h5>
                     <h5> Lieu :</h5>
                    <p> <?php echo $_POST['text-form-1'] ?></p>
                </div>
                <div class="school-2 school-card">
                    <h4> <?php echo $_POST['title-form-2'] ?></h4>
                     <h5> Lieu :</h5>
                    <p> <?php echo $_POST['text-form-2'] ?></p>
                </div>
                <div class="interest-card">
                     <h4> <strong>Centre d'interets:</h4>
                    <h5> <?php echo $_POST['interest'].":" ?> </h5>
                    <p> <?php echo $_POST['descriptionInteret'] ?></p>
                </div>
            </div>
    	</div>


        

    	<?php
        $html=ob_get_clean();


    @require_once('TCPDF/tcpdf_import.php');

    // create new PDF document
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Your Blog Coach');
    $pdf->SetTitle('Heading');

    // set default header data

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

    // set margins
    $pdf->SetMargins(20, 20, 20);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

    // add a page
    $pdf->AddPage();

    

    $pdf->writeHTML($html, true, false, true, false, '');



    // reset pointer to the last page
    $pdf->lastPage();
    //Close and output PDF document

    ob_clean();
    $pdf->output("/home/etudiants/info/ymeddour/local_html/cv-".$_POST['name'].".pdf","FD");



    }


}
