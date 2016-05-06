<style type="text/css">
    
/* ==========================================================================
   Title
   ========================================================================== */

.title{
    border-bottom: 1px solid #D8D8D8;
}


/* ==========================================================================
   Table Class
   ========================================================================== */


table.table{
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    background-color: transparent;
    border-spacing: 0;
    border-collapse: collapse;
    font-size: 12px;
}

.table>thead>tr>th {
    padding: 8px;
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
    text-align: left;
}

.table>tbody>tr>td, 
.table>tbody>tr>th, 
.table>tfoot>tr>td, 
.table>tfoot>tr>th, 
.table>thead>tr>td {
    padding: 5px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #f9f9f9;
}

.table-bordered>tbody>tr>td, 
.table-bordered>tbody>tr>th, 
.table-bordered>tfoot>tr>td, 
.table-bordered>tfoot>tr>th, 
.table-bordered>thead>tr>td, 
.table-bordered>thead>tr>th {
    border: 1px solid #ddd;
}

.table-hover>tbody>tr:hover {
    background-color: #f9f9f9;
}


/* ==========================================================================
   Input Class
   ========================================================================== */


label{
    font-size: 12px;
}

input[type=text],
input[type=password],
input[type=file]{
    width: 97%;
    border: 1px solid #CCC;
    font-size: 12px;
    padding: 5px;
}


textarea {
    font-size: 12px;
    padding: 5px;
    border: 1px solid #CCC;
    width: 97%;
}


input[type=checkbox], input[type=radio] {
    margin: 0px 5px 0px 5px;
    line-height: normal;
    vertical-align: middle;
}

select{
    width: 100%;
    border: 1px solid #CCC;
    font-size: 12px;
    padding: 5px;
}


/* ==========================================================================
   Buttons
   ========================================================================== */


.btn {
    display: inline-block;
    padding: 5px 8px;
    margin-bottom: 0;
    font-size: 12px;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    text-decoration: none;
}


.btn-default {
    color: #000;
    background-color: #EEE;
    border-color: #ccc;
}

.btn-default:hover {
    color: #000;
    background-color: #e6e6e6;
    border-color: #adadad;
}

.btn-primary {
    color: #fff;
    background-color: #0275d8;
    border-color: #0275d8;
}

.btn-primary:hover {
    background-color: #025AA5;
    border-color: #01549B;
}


.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #5cb85c;
}

.btn-success:hover {
    background-color: #449D44;
    border-color: #419641;
}

.btn-warning {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #f0ad4e;
}

.btn-warning:hover {
    background-color: #EC971F;
    border-color: #EB9316;
}

.btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d9534f;
}

.btn-danger:hover {
    background-color: #C9302C;
    border-color: #C12E2A;
}


/* ==========================================================================
   Alerts
   ========================================================================== */


.alert {
    border: 1px solid transparent;
    margin-bottom: 10px;
    padding: 10px;
    font-size: 12px;
}

.alert-success {
    background-color: #DFF0D8;
    color: #3C763D;
    border-color: #b2dba1;
}


.alert-info {
    background-color: #D9EDF7;
    color: #31708F;
    border-color: #9acfea;
}

.alert-warning {
    background-color: #FCF8E3;
    color: #8A6D3B;
    border-color: #f5e79e;
}

.alert-danger {
    background-color: #F2DEDE;
    color: #A94442;
    border-color: #dca7a7;
}

/* ==========================================================================
   Call Out
   ========================================================================== */

.callout {
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    border: 1px solid #F7F7F7;
    border-left-width: 2px;
    font-size: 12px;
    background-color: #FFFFFF;
}

.callout-success {
    border-left-color: #5CB85C;
}

.callout-info {
    border-left-color: #5bc0de;
}

.callout-warning {
    border-left-color: #f0ad4e;
}

.callout-danger {
    border-left-color: #D9534F;
}



/* ==========================================================================
   Wells
   ========================================================================== */

.well {
    font-size: 12px;
    min-height: 15px;
    padding: 15px;
    margin-bottom: 10px;
    background-color: #F7F7F7;
    border: 1px solid #e3e3e3;
}


/* ==========================================================================
   Panel
   ========================================================================== */

.panel {
    margin-bottom: 10px;
    background-color: #fff;
    border: 1px solid transparent;
    font-size: 12PX;
}

.panel-heading {
    padding: 5px 10px;
}

.panel-title {
    color: inherit;
    margin-bottom: 0;
    margin-top: 0;
}

.panel-body {
    padding: 10px;
    background-color: #FFF;
    color: #000;
}

.panel-default {
    background-color: #F5F5F5;
    border-color: #DDD;
    color: #333;
}

.panel-primary {
    background-color: #428BCA;
    border-color: #428BCA;
    color: #FFF;
}

.panel-success {
    background-color: #DFF0D8;
    color: #3C763D;
    border-color: #b2dba1;
}

.panel-info {
    background-color: #D9EDF7;
    color: #31708F;
    border-color: #9acfea;
}

.panel-warning {
    background-color: #FCF8E3;
    color: #8A6D3B;
    border-color: #f5e79e;
}

.panel-danger {
    background-color: #F2DEDE;
    color: #A94442;
    border-color: #dca7a7;
}


/* ==========================================================================
   Errors and Notifications
   ========================================================================== */


input.error, 
textarea.error,
select.error{
    border: 1px solid #FF5F5F;
}

label.error{
    color: #FF5F5F;
}


   
    
</style>