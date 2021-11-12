<?php

namespace App\Controller;

use App\Kernel;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Bundle\SnappyBundle\Snappy;
use Knp\Snappy\Pdf;
use Knp\Bundle\SnappyBundle\DependencyInjection;

class PdfController extends AbstractController
{
    /**
     * @Route("/pdf", name="pdf")
     */
    public function index(Pdf $knpSnappyPdf, Request $request)
    {
        $name=$request->get('name');
        $mail=$request->get('mail');
        $tel=$request->get('tel');
        $poste=$request->get('poste');
        $profil=$request->get('profil');
        $s1=$request->get('s1');
        $s2=$request->get('s2');
        $s3=$request->get('s3');
        $ds1=$request->get('ds1');
        $ds2=$request->get('ds2');
        $ds3=$request->get('ds3');
        $tc1=[];
        $tc2=[];
        $tc3=[];
        $soc1=$request->get('soc1');
        $soc2=$request->get('soc2');
        $postexp1=$request->get('postexp1');
        $postexp2=$request->get('postexp2');
        $exp1=$request->get('exp1');
        $exp2=$request->get('exp2');
        $dd1=$request->get('dd1');
        $dd2=$request->get('dd2');
        $df1=$request->get('df1');
        $df2=$request->get('df2');
        $ed1=$request->get('ed1');
        $ed2=$request->get('ed2');
        $cert1=$request->get('cert1');
        $cert2=$request->get('cert2');
        $j=1;

        do{
            array_push($tc1,$request->get('tc'.$j));
            $j++;
        }while($j<4);
        do{
            array_push($tc2,$request->get('tc'.$j));
            $j++;
        }while(3<$j && $j<7);
        do{
            array_push($tc3,$request->get('tc'.$j));
            $j++;
        }while(6<$j && $j<10);



        $filename = "Resume";
        $html= $this->renderView('pdf/index.html.twig', [
            "filename"=>$filename,
            "name"=>$name,
            "mail"=>$mail,
            "tel"=>$tel,
            "poste"=>$poste,
            "profil"=>$profil,
            "s1"=>$s1,
            "s2"=>$s2,
            "s3"=>$s3,
            "ds1"=>$ds1,
            "ds2"=>$ds2,
            "ds3"=>$ds3,
            "tc1"=>$tc1,
            "tc2"=>$tc2,
            "tc3"=>$tc3,
            "soc1"=>$soc1,
            "soc2"=>$soc2,
            "postexp1"=>$postexp1,
            "postexp2"=>$postexp2,
            "exp1"=>$exp1,
            "exp2"=>$exp2,
            "dd1"=>$dd1,
            "dd2"=>$dd2,
            "df1"=>$df1,
            "df2"=>$df2,
            "ed1"=>$ed1,
            "ed2"=>$ed2,
            "cert1"=>$cert1,
            "cert2"=>$cert2,

        ]);

        $knpSnappyPdf->setOption('margin-bottom',0);
        $knpSnappyPdf->setOption('margin-top',0);
        $knpSnappyPdf->setOption('margin-right',0);
        $knpSnappyPdf->setOption('margin-left',0);
        $knpSnappyPdf->setOption('page-size',"A4");
        return new Response(
            $knpSnappyPdf->getOutputFromHtml($html),
            200,
            array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="'.$filename.'.pdf"'
            )
        );
    }
    /**
     * @Route ("/pdf1",name="pdf1")
     */
    public function pdf1(Request $request, Pdf $knpSnappyPdf){
        $name=$request->get('name');
        $mail=$request->get('mail');
        $tel=$request->get('tel');
        $poste=$request->get('poste');
        $profil=$request->get('profil');
        $s1=$request->get('s1');
        $s2=$request->get('s2');
        $s3=$request->get('s3');
        $s4=$request->get('s4');
        $s5=$request->get('s5');
        $p1=$request->get('p1');
        $p2=$request->get('p2');
        $p3=$request->get('p3');
        $p4=$request->get('p4');
        $p5=$request->get('p5');
        $avatar=$request->get('avatar');
        $home=$request->get('home');
        $soc1=$request->get('soc1');
        $soc2=$request->get('soc2');
        $exp1=$request->get('exp1');
        $exp2=$request->get('exp2');
        $dd1=$request->get('dd1');
        $dd2=$request->get('dd2');
        $df1=$request->get('df1');
        $df2=$request->get('df2');
        $ed1=$request->get('ed1');
        $ed2=$request->get('ed2');
        $cert1=$request->get('cert1');
        $cert2=$request->get('cert2');
        $d1=$request->get('d1');
        $d2=$request->get('d2');
        $f1=$request->get('f1');
        $f2=$request->get('f2');
        $fb=$request->get('fb');
        $lkd=$request->get('linkedin');
        $gh=$request->get('github');
        $html= $this->renderView('pdf/cv2.html.twig',
            [
                "name"=>$name,
                "mail"=>$mail,
                "tel"=>$tel,
                "poste"=>$poste,
                "profil"=>$profil,
                "s1"=>$s1,
                "s2"=>$s2,
                "s3"=>$s3,
                "s4"=>$s4,
                "s5"=>$s5,
                "p1"=>$p1,
                "p2"=>$p2,
                "p3"=>$p3,
                "p4"=>$p4,
                "p5"=>$p5,
                "avatar"=>$avatar,
                "home"=>$home,
                "soc1"=>$soc1,
                "soc2"=>$soc2,
                "exp1"=>$exp1,
                "exp2"=>$exp2,
                "dd1"=>$dd1,
                "dd2"=>$dd2,
                "df1"=>$df1,
                "df2"=>$df2,
                "ed1"=>$ed1,
                "ed2"=>$ed2,
                "cert1"=>$cert1,
                "cert2"=>$cert2,
                "d1"=>$d1,
                "d2"=>$d2,
                "f1"=>$f1,
                "f2"=>$f2,
                "fb"=>$fb,
                "gh"=>$gh,
                "linkedin"=>$lkd

            ]);
        $knpSnappyPdf->setOption('margin-bottom',0);
        $knpSnappyPdf->setOption('user-style-sheet','styles.css');
        $knpSnappyPdf->setOption('margin-top',0);
        $knpSnappyPdf->setOption('margin-right',0);
        $knpSnappyPdf->setOption('margin-left',0);
        $knpSnappyPdf->setOption('page-size',"A4");
        $knpSnappyPdf->setOption('images',true);
        $knpSnappyPdf->setOption('enable-javascript',true);
        $knpSnappyPdf->setOption('encoding',"utf-8");
        $knpSnappyPdf->setOption('javascript-delay',1000);
        $knpSnappyPdf->setOption('allow','.');
        $knpSnappyPdf->setOption('lowquality',false);
        return new Response(
            $knpSnappyPdf->getOutputFromHtml($html),
            200,
            array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="cv.pdf"'
            )
        );
    }
    /**
     * @Route ("/cvmaker1", name="cvmaker1")
     */
    public function cvmaker()
    {
        return $this->render('pdf/resumeMaker.html.twig');
    }
    /**
     * @Route ("/cvmaker2", name="cvmaker2")
     */
    public function cvmaker2()
    {
        return $this->render('pdf/cvmaker.html.twig');
    }

    /**
     * @Route ("/",name="choice")
     */
    public function choice()
    {
        return $this->render('pdf/choice.html.twig');
    }
}
