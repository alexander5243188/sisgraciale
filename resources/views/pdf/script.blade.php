<style>
    .header,
.footer {
    width: 100%;
    position: fixed;
}

body {
    font-family: 'Helvetica';
    font-size: 9pt;
    color: #111111;
}

hr {
    border: 1px solid #dddddd;
    margin-bottom: 0;
}

.text-left {
    text-align: left !important;
}

.text-center {
    text-align: center !important;
}

.text-right {
    text-align: right !important;
}

.text-company {
    color: #666666;
    font-size: 9pt;
}

.text-primary {
    color: #999999;
    font-weight: bold;
    font-size: 9pt;
}
.text-head {
    font-size: 9pt;
}


.table-items thead th {
    font-weight: bold;
    padding: 5px 2px;
    text-align: center;
    vertical-align: middle;
    background-color: #515365;
    color: #ffffff;
}

.table-items tbody td {
    padding: 3px 2px;
    vertical-align: top;
    border: 1px solid #eeeeee;
}

.table-items > tbody > tr:nth-child(odd) {
    background-color: #f9f9f9;
}

.table-items tfoot td {
    padding: 3px 2px;
    vertical-align: middle;
    border: 1px solid #eeeeee;
}

.table-secundary td {
    background-color: #F6F6F6;
    border: 1px dotted #D6D6D6;
}

.table-footer td {
    background-color: #FCFCFC;
    border: 1px dotted #EEEEEE;
}

.watermark {
    position: absolute;
    bottom: 540px;
    left: 100px;
    font-size: 50pt;
    font-weight: bold;
    color: #AAAAAA;
    letter-spacing: 6px;
    opacity: 0.3;
    transform: rotate(-45deg);
}
.invoice-logo{
    max-height: 120px;
    max-width: 240px;
}
.row {
    margin-right: -15px;
    margin-left: -15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
.col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
    float: left;
}
.col-xs-12 {
    width: 100%;
}
.col-xs-11 {
    width: 91.66666667%;
}
.col-xs-10 {
    width: 83.33333333%;
}
.col-xs-9 {
    width: 75%;
}
.col-xs-8 {
    width: 66.66666667%;
}
.col-xs-7 {
    width: 58.33333333%;
}
.col-xs-6 {
    width: 50%;
}
.col-xs-5 {
    width: 41.66666667%;
}
.col-xs-4 {
    width: 33.33333333%;
}
.col-xs-3 {
    width: 25%;
}
.col-xs-2 {
    width: 16.66666667%;
}
.col-xs-1 {
    width: 8.33333333%;
}
.ln_solid {
    border-top: 1px solid #e5e5e5;
    color: #ffffff;
    background-color: #ffffff;
    height: 1px;
    margin: 20px 0
}
.x_panel {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
    padding: 10px 17px;
    display: inline-block;
    background: #fff;
    border: 1px solid #E6E9ED;
}
.green {
    color: #1ABB9C
}
.dark {
    color: #34495E
}
.pull-right {
    float: right !important;
}
.pull-left {
    float: left !important;
}
small { font-size: 9pt  }








@page {
            margin-top: 310px;
            margin-bottom: 5px;
        }

        .header h1 {
            margin: 0;
        }

        .footer {
            bottom: 15px;
            font-size: 7pt;
            color: #333333;             
            border-top: 1px solid #1f1f1f;
            z-index: 1000;
        }
        footer {
            position: fixed;
            left: 0px;
            right: 0px;
            height: 60px;
            margin-top: -60px;
        }

        .pagenum:before {
            content: counter(page);
        }












</style>