<!DOCTYPE html>
<html>
<head>
    <title>Generate PDF Laravel 8 - phpcodingstuff.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
    * {
        box-sizing: border-box;
    }    
    body{
        background:#f2f2f2;
    }
    .customTable{
        max-width: 1110px;
    }
    .customTableLine{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    box-shadow: 0px 0px 10px rgba(33, 33, 33, 0.1);
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
