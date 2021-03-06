<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @var \Objects\Student[] $studentIds
 */
$studentIds = (isset($studentIds)) ? $studentIds : array();
?>

<!--dynamic table. thanks to-->
<!--https://bootsnipp.com/snippets/featured/dynamic-table-row-creation-and-deletion-->

<h3>
    Add Students:
    <button id="add_row" type="button" class="btn mx-1">Add Row</button>
</h3>
<div class="col-md-6 column">
    <table class="table" id="tab_logic">
        <thead>
        <tr>
            <th class="text-center">
                ID
            </th>
            <th></th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script>
    var studentIds = <?= json_encode($studentIds)?>;
    $(document).ready(function () {
        addStudentRow(studentIds);
    });
</script>
