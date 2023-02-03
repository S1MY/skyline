<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Generate PDF Laravel 8 - phpcodingstuff.com</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700&display=swap');
    * {
        box-sizing: border-box;
        font-family: 'Roboto',sans-serif, Arial, Helvetica;
    }    
    .customTable{
        max-width: 1110px;
    }
    .customTableLine{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    background: #f2f2f2;
    margin-top: 16px;
    height: 52px;
    border-radius: 10px;
}
.customTableItem{
    width: calc(100% / 3);
    font-size: 16px;
    line-height: 20px;
    opacity: 0.8;
    margin: 0 !important;
}
.customTableItem._w100{
    width: 100% !important;
    text-align: center;
    justify-content: center !important;
    font-weight: 500;
}
.customTableItem:not(:nth-child(1)){
    padding-left: 10px;
}
.customTableItem ._bold{
    font-weight: 500;
}
.customTableItem ._reded{
    color: #EB3B5A;
    font-weight: 600;
}
.customTableItem ._yelled{
    color: #FFD700;
    font-weight: 600;
}
.customTableItem ._greened{
    color: #20BF6B;
    font-weight: 600;
}
.customTableItem ._blueed{
    color: #3867D6;
    font-weight: 600;
}
    .pdf-btn{
        margin-top:30px;
    }
</style>
<body>
    <div class="container">
        <div class="customTable">
            <div class="customTableLine customTableHead">
                <p class="customTableItem">Дата и время</p>
                <p class="customTableItem">Имя и ID</p>
                <p class="customTableItem">Операция</p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 13:58:19</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "VIP" <span class="_greened">100000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
            <div class="customTableLine">
                <p class="customTableItem" aria-label="Дата и время">03 февраля в 11:49:21</p>
                <p class="customTableItem" aria-label="Имя и ID">Ансвер Ансверов (00007)</p>
                <p class="customTableItem" aria-label="Операция"><span>Оплата "Премиум" <span class="_greened">10000€</span></span></p>
            </div>
        </div>
        <div class="text-center pdf-btn">
            <a href="{{ route('pdf.generate') }}" class="btn btn-primary">Generate PDF</a>
        </div>
    </div>
</body>
</html>
