<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 11/10/2017
 * Time: 22:03
 */
include "header.php";
require_once $_SERVER["DOCUMENT_ROOT"].'/SmartGuard/config.php';
require_once path . "Model/Classes/Person.php";
require_once path . "Model/Managers/PersonManager.php";



?>
    <div class="row">
        <h3 class="blue-grey-text center">STAFF APPROVAL</h3>
        <div class="col s12">
            <br/>
            <br/>


            <div class="col s12">
                <table class="striped centered"">
                <tr><td class="blue-grey text-primary">WORK ID</td><td class="blue-grey text-primary">Names</td><td class="blue-grey text-primary">Action</td></tr>


                    <tr>
                        <td>aaaa</td>
                        <td>aa</td>
                        <td><a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">check</i></a>
                            <a class="btn-floating btn-large waves-effect waves-light red"><i
                                    class="material-icons">close</i></a></td>
                    </tr>



                </table>
            </div>


        </div>
    </div>

<?php
include "footer.php"
?>