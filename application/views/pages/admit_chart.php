
<!-- Begin Content -->
                <div class="content-inner profile">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title"><?=$title;?></h2>
                                </div>
                            </div>
                        </div>
                        <?php
                        if($this->session->success){
                        ?>
                        <div class="alert alert-success" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <strong><?=$this->session->success;?></strong>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if($this->session->failed){
                        ?>
                        <div class="alert alert-danger" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <strong><?=$this->session->failed;?></strong>
                        </div>
                        <?php
                        }

                        if($item['status']=="discharged"){
                            $dc="style='display:none;'";
                        }else{
                            $dc="";
                        }
                        ?>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-3">
                                <!-- Begin Widget -->
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        
                                        <h4 class="text-center mt-1 mb-1"><b>TOOTH CHART LEGEND</b></h4>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">&check; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OK</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)">M &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Missing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)">RF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Root Fragment</a>
                                            </li>                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);"><img src="<?=base_url('design/assets/images/implantlogo.jpg');?>" width="15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Implant</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)">IMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Impacted</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:red; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caries</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#3a018a; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Composite Filling</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#908d94; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amalgam Filling</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #fc1447, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recurrent Caries</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#fff56b; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Porcelain Fused to Metal <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crown (PFM)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#d6cc3e; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ceramic Crown (CER)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#FFD700; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gold Crown (GC)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #000000, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metal Crown (MC)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #d6cc3e, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ceramic Inlay/Onlay <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(CER I/O)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #FFD700, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gold Inlay/Onlay (G I/O)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #000000, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metal Inlay/Onlay (M I/O)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">                               
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td width="20%"><h4>Tooth Chart</h4></td>
                                            </tr>
                                        </table>                                        
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table width="100%" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="2%" align="center">

                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">55</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">54</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">53</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">52</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">51</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">61</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">62</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">63</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">64</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">65</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                        </td>
                                                        <td width="2%" align="center">

                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                    </tr><tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16" style="border-bottom:1px solid black;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">18</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">17</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">16</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                           
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                             <a class="btn btn-info btn-sm text-white">15</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">14</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">13</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">12</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">11</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">21</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">22</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">23</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">24</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">25</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">26</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">27</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">28</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16" style="border-bottom:1px solid black;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">48</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">47</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                             <a class="btn btn-info btn-sm text-white">46</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                           
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">45</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">44</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">43</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">42</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">41</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">31</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">32</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">33</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">34</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">35</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                             <a class="btn btn-info btn-sm text-white">36</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                           
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">37</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">38</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                            
                                                        </td>
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16" style="border-bottom:1px solid black;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%" align="center">

                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">85</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">84</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">83</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">82</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">81</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">71</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">72</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">73</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">74</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">75</a>
                                                        </td>
                                                        <td width="2%" align="center">

                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>                     
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->                                                          