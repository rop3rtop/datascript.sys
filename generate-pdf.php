<?php
if (isset($_POST['sitemap'])) {
    /* update data */
    $os->generateXml();
//    header("Location: http://recipemines.com/blogspot.xml");
    $update = "Generate Berhasil";
} else {
    $update= "";
}
$template = $os->list_template_arr();
//print_r($template);exit;
?>
<script>
    var template = <?=json_encode($template)?>
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Generate PDF
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Generate XML Blogspot</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Load Template <i>(Pilih Template yang sudah tersimpan)</i></label>
                        <select name="list_template" id="list_template" class="form-control list_template">
                            <option value="">-- Pilih Template --</option>
                            <?php
                            $i=0;
                            foreach ($template as $val){
                                echo "<option  data-index='".$i."' value='".$i."'>".$val->nama_template."</option>";
                                $i++;
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Template Judul <i>(contoh : {Get|Download|Free Download} [[title]] {Online|Now|for Freee})</i></label>
                        <input type="text" name="template_judul" class="template_judul form-control">
                    </div>
                    <div class="form-group">
                        <label>Template Body</label>
                        <textarea id="editor1" class="template_body form-control" name="template_body"></textarea>
                    </div>

                    <!--<div class="row row-services" align="" style="margin-top: 10px;margin-bottom: 10px;">
                        <label for="">root path file</label>
                        <input value="D:\project" type="text" class="form-control root-path" placeholder="Masukkah path root file">
                        <i style="color:red;
               text-align: left !important;
               margin-bottom: 20px !important;
               font-size: small !important;
               font-style: italic !important;">
                            contoh : D:\project
                        </i>
                    </div>-->

                    <div class="row row-services" align="" style="margin-top: 10px;margin-bottom: 10px;">
                        <label for="">Link CPA</label>
                        <input value="http://google.com" type="text" class="form-control cpa-link" placeholder="Masukkah link menuju cpa">
                        <i style="color:red;
                           text-align: left !important;
                           margin-bottom: 20px !important;
                           font-size: small !important;
                           font-style: italic !important;">
                            contoh : http://google.com
                        </i>
                    </div>
                    <div class="text-center" style="margin: 30px 0;">
                        <div class="loading"></div>
                        <button class="button-type-4 btGenerate" title="klik untuk generate pdf">Generate PDF</button>
                        <!--<button class="button-type-2-md btGeneratexls "
                                title="Klik setelah proses generate pdf selesai semua">Download Hasil
                        </button>-->
                    </div>
                    <!--<div class="pad panel">
                        <ul class="log">

                        </ul>
                    </div>-->
                    <div class="pad panel" id="my_api_iframe">

                    </div>
                </div>
            </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script src="./js/generate-pdf.js"></script>