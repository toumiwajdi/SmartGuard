<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 22:03
 */
include "header.php";
require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
require_once path . "Model/Classes/Hospital.php";
require_once path . "Model/Managers/HospitalManager.php";
$ambman=new HospitalManager();
$array=$ambman->getAll();


?>
    <div class="row">
        <h3 class="blue-grey-text center">HOSPITAL MANAGEMENT</h3>
        <div class="col s12">
            <br/>
            <div class="col s10 offset-s10">
                <a class="btn waves-effect waves-light blue-grey" href="" >Add
                    <i class="material-icons right">add</i>
                </a>

            </div>
            <br/>
            <br/>


            <div class="col s12">
                <table class="striped centered"">
                <tr><td class="blue-grey text-primary">ID</td><td class="blue-grey text-primary">Name</td><td class="blue-grey text-primary">Adresse</td><td class="blue-grey text-primary">Action</td></tr>

                <?php foreach ($array as $data) { ?>
                    <tr>
                        <td><?php echo $data[0]?></td>
                        <td><?php echo $data[1]?></td>
                        <td><?php echo $data[2]?></td>
                        <td><a class="btn-floating btn-large waves-effect waves-light blue-grey"><i class="material-icons">update</i></a>
                            <a class="btn-floating btn-large waves-effect waves-light red"><i
                                    class="material-icons">delete</i></a></td>
                    </tr>
                    <?php
                }
                ?>


                </table>
            </div>


        </div>
    </div>

<?php
include "footer.php"
?>