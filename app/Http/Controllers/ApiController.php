<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 15.09.17
 * Time: 13:12
 */

namespace App\Http\Controllers;


use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;



class ApiController extends Controller
{


    public function getApiResults(){


        $client = new Client();


        $result = $client->post('https://www.edeka.de/ts/rezepte/rcl.jsp', [
            'form_params' => [
                'start' => '0',
                'row' => '25',
                'omitHeader' => 'true',
                'indent' => 'on',
                'hl' => 'false',
                'wt' => 'json',
                'fl' => 'id_tlc, media-name_tlcm, media-quality_tlcm, artikelbezeichnung_tlc, auslobungen_tlcm, markenname_tlc, media-mediatype_tlcm, durchschnitt_bewertungen_d, produktkategorie-id1_tlc, produktkategorie-id2_tlc, internetkategorien-id1_tlcm, internetkategorien-id2_tlcm, seoLabel_tlc',
                'q' => 'indexName:b2cProdukteIndexNew AND ( (artikelbezeichnung_tlc:** OR artikelbezeichnung_normalized_tlc:** OR werbetext_tlc:** OR features-ZTVZ-Grunddaten_tlc:** OR features-VAHW-Grunddaten_tlc:** OR auslobungen_tlcm:** OR auslobungen_normalized_tlcm:** OR markenname_tlc:**)) AND -internetkategorien-id1_tlcm:"1410523467062" AND -internetkategorien-id2_tlcm:"1410523467062" AND -internetkategorien-id3_tlcm:"1410523467062" AND -produktkategorie-id1_tlc:"1410523467062" AND -produktkategorie-id2_tlc:"1410523467062" AND -internetkategorien-id1_tlcm:"1423046754061" AND -internetkategorien-id2_tlcm:"1423046754061" AND -internetkategorien-id3_tlcm:"1423046754061" AND -produktkategorie-id1_tlc:"1423046754061" AND -produktkategorie-id2_tlc:"1423046754061" AND -internetkategorien-id1_tlcm:"1423488445199" AND -internetkategorien-id2_tlcm:"1423488445199" AND -internetkategorien-id3_tlcm:"1423488445199" AND -produktkategorie-id1_tlc:"1423488445199" AND -produktkategorie-id2_tlc:"1423488445199" AND -internetkategorien-id1_tlcm:"1424337150897" AND -internetkategorien-id2_tlcm:"1424337150897" AND -internetkategorien-id3_tlcm:"1424337150897" AND -produktkategorie-id1_tlc:"1424337150897" AND -produktkategorie-id2_tlc:"1424337150897" AND -internetkategorien-id1_tlcm:"1424337150896" AND -internetkategorien-id2_tlcm:"1424337150896" AND -internetkategorien-id3_tlcm:"1424337150896" AND -produktkategorie-id1_tlc:"1424337150896" AND -produktkategorie-id2_tlc:"1424337150896" AND -internetkategorien-id1_tlcm:"1424337150896" AND -internetkategorien-id2_tlcm:"1424337150896" AND -internetkategorien-id3_tlcm:"1424337150896" AND -produktkategorie-id1_tlc:"1424337150896" AND -produktkategorie-id2_tlc:"1424337150896"',
                'sort' => 'artikelbezeichnung_tlc asc',
                'form' => 'isSentProduct%3Dtrue%26actRegion%3DEZ%26actMarke%3D%26actCategory1%3D%26actCategory2%3D%26actCategoryCountIndex%3D%26actCategoryCountChildIndex%3D%26textsearch%3DBitte%2520Produktname%2520eingeben%26paging.ActHitsPerPage%3D25%26paging.startPage%3D1%26paging.start%3D0%26paging.getActSort%3Dartikelbezeichnung_tlc%2520asc'

            ]
        ]);
        echo"<pre>";print_r($result->getStatusCode());echo"</pre>";

        $jsonResult = $result->getBody()->getContents();

        $jsonResult = \GuzzleHttp\json_decode($jsonResult);

        echo"<pre>";print_r($jsonResult);echo"</pre>";




    }


}