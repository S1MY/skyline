@extends('cabinet.layouts.master')

@section('cabContent')

    <link rel="stylesheet" href="/assets/css/admin.css">

    <div class="page">

        @include('cabinet.layouts.sidebar')

        <div class="content">
            <div class="contentWrapper">
                <h1 class="pageTitle">Авторизация</h1>
                <div class="adminUser">
                    <input type="text" class="contentInput" name="id" placeholder="ID пользователя" required>
                    <a href="#" class="btn" id="adminAuth">Авторизация</a>
                    <a href="#" class="btn" id="adminEdit">Изменить</a>
                </div>
                <h2 class="pageTitle">Админ панель</h2>
                <div class="pageStat displayFlex spaceBetween alignItemsCenter flexWrap">
                    <div class="pageStatItem">
                        <div class="statIcon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 12C12.5933 12 13.1734 11.8241 13.6667 11.4944C14.1601 11.1648 14.5446 10.6962 14.7716 10.148C14.9987 9.59987 15.0581 8.99667 14.9424 8.41473C14.8266 7.83279 14.5409 7.29824 14.1213 6.87868C13.7018 6.45912 13.1672 6.1734 12.5853 6.05764C12.0033 5.94189 11.4001 6.0013 10.852 6.22836C10.3038 6.45542 9.83524 6.83994 9.50559 7.33329C9.17595 7.82664 9 8.40666 9 9C9 9.79565 9.31607 10.5587 9.87868 11.1213C10.4413 11.6839 11.2044 12 12 12ZM12 8C12.1978 8 12.3911 8.05865 12.5556 8.16853C12.72 8.27841 12.8482 8.43459 12.9239 8.61732C12.9996 8.80004 13.0194 9.00111 12.9808 9.19509C12.9422 9.38907 12.847 9.56725 12.7071 9.70711C12.5673 9.84696 12.3891 9.9422 12.1951 9.98078C12.0011 10.0194 11.8 9.99957 11.6173 9.92388C11.4346 9.84819 11.2784 9.72002 11.1685 9.55557C11.0587 9.39112 11 9.19778 11 9C11 8.73478 11.1054 8.48043 11.2929 8.29289C11.4804 8.10536 11.7348 8 12 8ZM12.71 14.29C12.6149 14.199 12.5028 14.1276 12.38 14.08C12.2603 14.0271 12.1309 13.9998 12 13.9998C11.8691 13.9998 11.7397 14.0271 11.62 14.08C11.4972 14.1276 11.3851 14.199 11.29 14.29L9 16.54C8.80639 16.7336 8.69762 16.9962 8.69762 17.27C8.69762 17.5438 8.80639 17.8064 9 18C9.19361 18.1936 9.4562 18.3024 9.73 18.3024C10.0038 18.3024 10.2664 18.1936 10.46 18L11 17.41L11 21C11 21.2652 11.1054 21.5196 11.2929 21.7071C11.4804 21.8946 11.7348 22 12 22C12.2652 22 12.5196 21.8946 12.7071 21.7071C12.8946 21.5196 13 21.2652 13 21L13 17.41L13.54 18C13.7336 18.1936 13.9962 18.3024 14.27 18.3024C14.5438 18.3024 14.8064 18.1936 15 18C15.1936 17.8064 15.3024 17.5438 15.3024 17.27C15.3024 16.9962 15.1936 16.7336 15 16.54L12.71 14.29ZM5 9C5 9.19778 5.05865 9.39112 5.16853 9.55557C5.27841 9.72002 5.43459 9.84819 5.61732 9.92388C5.80004 9.99957 6.00111 10.0194 6.19509 9.98078C6.38907 9.9422 6.56726 9.84696 6.70711 9.70711C6.84696 9.56725 6.9422 9.38907 6.98079 9.19509C7.01937 9.00111 6.99957 8.80004 6.92388 8.61731C6.84819 8.43459 6.72002 8.27841 6.55557 8.16853C6.39112 8.05865 6.19778 8 6 8C5.73478 8 5.48043 8.10536 5.29289 8.29289C5.10536 8.48043 5 8.73478 5 9ZM4 16L7 16C7.26522 16 7.51957 15.8946 7.70711 15.7071C7.89464 15.5196 8 15.2652 8 15C8 14.7348 7.89464 14.4804 7.70711 14.2929C7.51957 14.1054 7.26522 14 7 14L4 14C3.73478 14 3.48043 13.8946 3.29289 13.7071C3.10536 13.5196 3 13.2652 3 13L3 5C3 4.73478 3.10536 4.48043 3.29289 4.29289C3.48043 4.10535 3.73478 4 4 4L20 4C20.2652 4 20.5196 4.10536 20.7071 4.29289C20.8946 4.48043 21 4.73478 21 5L21 13C21 13.2652 20.8946 13.5196 20.7071 13.7071C20.5196 13.8946 20.2652 14 20 14L17 14C16.7348 14 16.4804 14.1054 16.2929 14.2929C16.1054 14.4804 16 14.7348 16 15C16 15.2652 16.1054 15.5196 16.2929 15.7071C16.4804 15.8946 16.7348 16 17 16L20 16C20.7957 16 21.5587 15.6839 22.1213 15.1213C22.6839 14.5587 23 13.7956 23 13L23 5C23 4.20435 22.6839 3.44129 22.1213 2.87868C21.5587 2.31607 20.7957 2 20 2L4 2C3.20435 2 2.44129 2.31607 1.87868 2.87868C1.31607 3.44129 1 4.20435 1 5L1 13C1 13.7956 1.31607 14.5587 1.87868 15.1213C2.44129 15.6839 3.20435 16 4 16ZM19 9C19 8.80222 18.9414 8.60888 18.8315 8.44443C18.7216 8.27998 18.5654 8.15181 18.3827 8.07612C18.2 8.00043 17.9989 7.98063 17.8049 8.01921C17.6109 8.0578 17.4327 8.15304 17.2929 8.29289C17.153 8.43275 17.0578 8.61093 17.0192 8.80491C16.9806 8.99889 17.0004 9.19996 17.0761 9.38268C17.1518 9.56541 17.28 9.72159 17.4444 9.83147C17.6089 9.94135 17.8022 10 18 10C18.2652 10 18.5196 9.89464 18.7071 9.70711C18.8946 9.51957 19 9.26522 19 9Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="statRight">
                            <p class="statName">Общий баланс</p>
                            <p class="statCount">1000€</p>
                        </div>
                    </div>
                    <div class="pageStatItem">
                        <div class="statIcon _blueed">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 12C11.4067 12 10.8266 12.1759 10.3333 12.5056C9.83994 12.8352 9.45542 13.3038 9.22836 13.8519C9.0013 14.4001 8.94189 15.0033 9.05764 15.5853C9.1734 16.1672 9.45912 16.7018 9.87868 17.1213C10.2982 17.5409 10.8328 17.8266 11.4147 17.9424C11.9967 18.0581 12.5999 17.9987 13.1481 17.7716C13.6962 17.5446 14.1648 17.1601 14.4944 16.6667C14.8241 16.1734 15 15.5933 15 15C15 14.2044 14.6839 13.4413 14.1213 12.8787C13.5587 12.3161 12.7956 12 12 12ZM12 16C11.8022 16 11.6089 15.9414 11.4444 15.8315C11.28 15.7216 11.1518 15.5654 11.0761 15.3827C11.0004 15.2 10.9806 14.9989 11.0192 14.8049C11.0578 14.6109 11.153 14.4327 11.2929 14.2929C11.4327 14.153 11.6109 14.0578 11.8049 14.0192C11.9989 13.9806 12.2 14.0004 12.3827 14.0761C12.5654 14.1518 12.7216 14.28 12.8315 14.4444C12.9414 14.6089 13 14.8022 13 15C13 15.2652 12.8946 15.5196 12.7071 15.7071C12.5196 15.8946 12.2652 16 12 16ZM11.29 9.71C11.3851 9.80104 11.4972 9.87241 11.62 9.92C11.7397 9.97291 11.8691 10.0002 12 10.0002C12.1309 10.0002 12.2603 9.97291 12.38 9.92C12.5028 9.87241 12.6149 9.80104 12.71 9.71L15 7.46C15.1936 7.26639 15.3024 7.0038 15.3024 6.73C15.3024 6.4562 15.1936 6.19361 15 6C14.8064 5.80639 14.5438 5.69762 14.27 5.69762C13.9962 5.69762 13.7336 5.80639 13.54 6L13 6.59V3C13 2.73478 12.8946 2.48043 12.7071 2.29289C12.5196 2.10536 12.2652 2 12 2C11.7348 2 11.4804 2.10536 11.2929 2.29289C11.1054 2.48043 11 2.73478 11 3V6.59L10.46 6C10.2664 5.80639 10.0038 5.69762 9.73 5.69762C9.4562 5.69762 9.19361 5.80639 9 6C8.80639 6.19361 8.69762 6.4562 8.69762 6.73C8.69762 7.0038 8.80639 7.26639 9 7.46L11.29 9.71ZM19 15C19 14.8022 18.9414 14.6089 18.8315 14.4444C18.7216 14.28 18.5654 14.1518 18.3827 14.0761C18.2 14.0004 17.9989 13.9806 17.8049 14.0192C17.6109 14.0578 17.4327 14.153 17.2929 14.2929C17.153 14.4327 17.0578 14.6109 17.0192 14.8049C16.9806 14.9989 17.0004 15.2 17.0761 15.3827C17.1518 15.5654 17.28 15.7216 17.4444 15.8315C17.6089 15.9414 17.8022 16 18 16C18.2652 16 18.5196 15.8946 18.7071 15.7071C18.8946 15.5196 19 15.2652 19 15ZM20 8H17C16.7348 8 16.4804 8.10536 16.2929 8.29289C16.1054 8.48043 16 8.73478 16 9C16 9.26522 16.1054 9.51957 16.2929 9.70711C16.4804 9.89464 16.7348 10 17 10H20C20.2652 10 20.5196 10.1054 20.7071 10.2929C20.8946 10.4804 21 10.7348 21 11V19C21 19.2652 20.8946 19.5196 20.7071 19.7071C20.5196 19.8946 20.2652 20 20 20H4C3.73478 20 3.48043 19.8946 3.29289 19.7071C3.10536 19.5196 3 19.2652 3 19V11C3 10.7348 3.10536 10.4804 3.29289 10.2929C3.48043 10.1054 3.73478 10 4 10H7C7.26522 10 7.51957 9.89464 7.70711 9.70711C7.89464 9.51957 8 9.26522 8 9C8 8.73478 7.89464 8.48043 7.70711 8.29289C7.51957 8.10536 7.26522 8 7 8H4C3.20435 8 2.44129 8.31607 1.87868 8.87868C1.31607 9.44129 1 10.2044 1 11V19C1 19.7956 1.31607 20.5587 1.87868 21.1213C2.44129 21.6839 3.20435 22 4 22H20C20.7956 22 21.5587 21.6839 22.1213 21.1213C22.6839 20.5587 23 19.7956 23 19V11C23 10.2044 22.6839 9.44129 22.1213 8.87868C21.5587 8.31607 20.7956 8 20 8ZM5 15C5 15.1978 5.05865 15.3911 5.16853 15.5556C5.27841 15.72 5.43459 15.8482 5.61732 15.9239C5.80004 15.9996 6.00111 16.0194 6.19509 15.9808C6.38907 15.9422 6.56725 15.847 6.70711 15.7071C6.84696 15.5673 6.9422 15.3891 6.98079 15.1951C7.01937 15.0011 6.99957 14.8 6.92388 14.6173C6.84819 14.4346 6.72002 14.2784 6.55557 14.1685C6.39112 14.0586 6.19778 14 6 14C5.73478 14 5.48043 14.1054 5.29289 14.2929C5.10536 14.4804 5 14.7348 5 15Z" fill="white"/>
                                </svg>
                        </div>
                        <div class="statRight">
                            <p class="statName">20% от общего баланса</p>
                            <p class="statCount">200€</p>
                        </div>
                    </div>
                    <div class="pageStatItem">
                        <div class="statIcon _greened">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 17H2C1.73478 17 1.48043 17.1054 1.29289 17.2929C1.10536 17.4804 1 17.7348 1 18C1 18.2652 1.10536 18.5196 1.29289 18.7071C1.48043 18.8946 1.73478 19 2 19H22C22.2652 19 22.5196 18.8946 22.7071 18.7071C22.8946 18.5196 23 18.2652 23 18C23 17.7348 22.8946 17.4804 22.7071 17.2929C22.5196 17.1054 22.2652 17 22 17ZM22 21H2C1.73478 21 1.48043 21.1054 1.29289 21.2929C1.10536 21.4804 1 21.7348 1 22C1 22.2652 1.10536 22.5196 1.29289 22.7071C1.48043 22.8946 1.73478 23 2 23H22C22.2652 23 22.5196 22.8946 22.7071 22.7071C22.8946 22.5196 23 22.2652 23 22C23 21.7348 22.8946 21.4804 22.7071 21.2929C22.5196 21.1054 22.2652 21 22 21ZM6 7C5.80222 7 5.60888 7.05865 5.44443 7.16853C5.27998 7.27841 5.15181 7.43459 5.07612 7.61732C5.00043 7.80004 4.98063 8.00111 5.01921 8.19509C5.0578 8.38907 5.15304 8.56725 5.29289 8.70711C5.43275 8.84696 5.61093 8.9422 5.80491 8.98079C5.99889 9.01937 6.19996 8.99957 6.38268 8.92388C6.56541 8.84819 6.72159 8.72002 6.83147 8.55557C6.94135 8.39112 7 8.19778 7 8C7 7.73478 6.89464 7.48043 6.70711 7.29289C6.51957 7.10536 6.26522 7 6 7ZM20 1H4C3.20435 1 2.44129 1.31607 1.87868 1.87868C1.31607 2.44129 1 3.20435 1 4V12C1 12.7956 1.31607 13.5587 1.87868 14.1213C2.44129 14.6839 3.20435 15 4 15H20C20.7956 15 21.5587 14.6839 22.1213 14.1213C22.6839 13.5587 23 12.7956 23 12V4C23 3.20435 22.6839 2.44129 22.1213 1.87868C21.5587 1.31607 20.7956 1 20 1ZM21 12C21 12.2652 20.8946 12.5196 20.7071 12.7071C20.5196 12.8946 20.2652 13 20 13H4C3.73478 13 3.48043 12.8946 3.29289 12.7071C3.10536 12.5196 3 12.2652 3 12V4C3 3.73478 3.10536 3.48043 3.29289 3.29289C3.48043 3.10536 3.73478 3 4 3H20C20.2652 3 20.5196 3.10536 20.7071 3.29289C20.8946 3.48043 21 3.73478 21 4V12ZM12 5C11.4067 5 10.8266 5.17595 10.3333 5.50559C9.83994 5.83524 9.45542 6.30377 9.22836 6.85195C9.0013 7.40013 8.94189 8.00333 9.05764 8.58527C9.1734 9.16721 9.45912 9.70176 9.87868 10.1213C10.2982 10.5409 10.8328 10.8266 11.4147 10.9424C11.9967 11.0581 12.5999 10.9987 13.1481 10.7716C13.6962 10.5446 14.1648 10.1601 14.4944 9.66671C14.8241 9.17336 15 8.59334 15 8C15 7.20435 14.6839 6.44129 14.1213 5.87868C13.5587 5.31607 12.7956 5 12 5ZM12 9C11.8022 9 11.6089 8.94135 11.4444 8.83147C11.28 8.72159 11.1518 8.56541 11.0761 8.38268C11.0004 8.19996 10.9806 7.99889 11.0192 7.80491C11.0578 7.61093 11.153 7.43275 11.2929 7.29289C11.4327 7.15304 11.6109 7.0578 11.8049 7.01921C11.9989 6.98063 12.2 7.00043 12.3827 7.07612C12.5654 7.15181 12.7216 7.27998 12.8315 7.44443C12.9414 7.60888 13 7.80222 13 8C13 8.26522 12.8946 8.51957 12.7071 8.70711C12.5196 8.89464 12.2652 9 12 9ZM18 7C17.8022 7 17.6089 7.05865 17.4444 7.16853C17.28 7.27841 17.1518 7.43459 17.0761 7.61732C17.0004 7.80004 16.9806 8.00111 17.0192 8.19509C17.0578 8.38907 17.153 8.56725 17.2929 8.70711C17.4327 8.84696 17.6109 8.9422 17.8049 8.98079C17.9989 9.01937 18.2 8.99957 18.3827 8.92388C18.5654 8.84819 18.7216 8.72002 18.8315 8.55557C18.9414 8.39112 19 8.19778 19 8C19 7.73478 18.8946 7.48043 18.7071 7.29289C18.5196 7.10536 18.2652 7 18 7Z" fill="white"/>
                                </svg>
                        </div>
                        <div class="statRight">
                            <p class="statName">80% от общего баланса</p>
                            <p class="statCount">800€</p>
                        </div>
                    </div>
                    <div class="pageStatItem _admin">
                        <div class="statIcon _orangeed">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.85 18.3234C23.8219 18.5156 23.775 18.7031 23.7047 18.8484C23.5781 19.1063 23.4562 19.1297 22.9781 19.1063C22.3594 19.0781 21.4734 19.1063 20.5359 19.1438C20.5359 19.4016 20.5453 19.5234 20.5453 19.5234C20.6062 20.2313 20.925 20.2547 21.0516 20.2547H23.0672C23.2453 20.2547 23.4094 20.2547 23.5359 20.1703C23.7 20.0625 23.7703 19.7484 23.8312 19.2C23.8406 19.1203 23.8453 19.0172 23.85 18.8953V18.8906C23.85 18.8531 23.8547 18.8063 23.8547 18.7547V18.7031C23.8547 18.5766 23.8547 18.4359 23.85 18.3234ZM0.140613 18.3234C0.168738 18.5156 0.215613 18.7031 0.285925 18.8484C0.412488 19.1063 0.534363 19.1297 1.01249 19.1063C1.63124 19.0781 2.51718 19.1063 3.45468 19.1438C3.45468 19.4016 3.4453 19.5234 3.4453 19.5234C3.38436 20.2313 3.06561 20.2547 2.93905 20.2547H0.923425C0.7453 20.2547 0.5953 20.2547 0.454675 20.1703C0.285925 20.0719 0.2203 19.7484 0.159363 19.2C0.149988 19.1203 0.1453 19.0172 0.140613 18.8953V18.8906C0.140613 18.8531 0.135925 18.8063 0.135925 18.7547V18.7031C0.140613 18.5766 0.140613 18.4359 0.140613 18.3234Z" fill="white" fill-opacity="0.75"/>
                                <path d="M24 13.9031C24 12.4641 23.8125 11.0578 23.7375 10.9031C23.6812 10.7906 23.3203 10.4953 22.5 9.93749C21.6703 9.37031 21.6891 9.45468 21.5391 9.08437C21.675 9.04218 21.8062 8.96249 21.8859 8.95312C22.0641 8.93437 22.0734 9.10312 22.4437 9.10312C22.8141 9.10312 23.6156 9.00468 23.7797 8.84062C23.9437 8.67656 23.9953 8.62031 23.9953 8.47499C23.9953 8.32968 23.9109 8.02968 23.7516 7.85156C23.5922 7.67343 22.9125 7.58437 22.5141 7.53281C22.1156 7.48124 22.0594 7.53281 21.9562 7.59843C21.7922 7.70156 21.7828 8.64374 21.7828 8.64374L21.3937 8.65312C21.1406 8.02968 20.7891 6.77343 20.2406 5.78437C19.6406 4.70624 19.0125 4.36874 18.75 4.28437C18.4922 4.20468 18.2578 4.14843 16.5 3.97031C14.7047 3.78281 13.275 3.75937 12 3.75937C10.725 3.75937 9.29531 3.78749 7.5 3.97031C5.74219 4.15312 5.50781 4.20468 5.25 4.28437C4.99219 4.36406 4.35938 4.70624 3.75937 5.78437C3.21094 6.77343 2.85938 8.02968 2.60625 8.65312L2.21719 8.64374C2.21719 8.64374 2.2125 7.70156 2.04375 7.59843C1.94062 7.53281 1.88438 7.47656 1.48594 7.53281C1.0875 7.58906 0.407813 7.67343 0.248438 7.85156C0.0890625 8.02968 0.0046875 8.32968 0.0046875 8.47499C0.0046875 8.62031 0.05625 8.68124 0.220312 8.84062C0.384375 9.00468 1.18594 9.10312 1.55625 9.10312C1.92656 9.10312 1.93594 8.93437 2.11406 8.95312C2.19375 8.96249 2.32969 9.04218 2.46094 9.08437C2.30625 9.45468 2.32969 9.37031 1.5 9.93749C0.679688 10.5 0.314063 10.7906 0.2625 10.9031C0.1875 11.0578 0 12.4641 0 13.9031C0 15.3422 0.103125 16.6359 0.103125 17.0953C0.103125 17.2875 0.103125 17.625 0.145312 17.9484C0.173437 18.1406 0.215625 18.3281 0.290625 18.4734C0.417187 18.7312 0.534375 18.7547 1.01719 18.7312C1.63594 18.7031 2.53125 18.7312 3.45469 18.7687C4.07344 18.7922 4.70625 18.8156 5.26875 18.8297C6.675 18.8578 6.2625 18.6234 6.8625 18.6328C7.4625 18.6422 9.82969 18.7406 11.9953 18.7406C14.1609 18.7406 16.5328 18.6422 17.1281 18.6328C17.7281 18.6234 17.3156 18.8578 18.7219 18.8297C19.2844 18.8203 19.9172 18.7922 20.5359 18.7687C21.4594 18.7359 22.3594 18.7031 22.9734 18.7312C23.4563 18.7547 23.5734 18.7312 23.7 18.4734C23.7703 18.3281 23.8172 18.1406 23.8453 17.9484C23.8922 17.625 23.8875 17.2875 23.8875 17.0953C23.8969 16.6406 24 15.3422 24 13.9031ZM4.04062 6.80624C4.26562 6.28124 4.94063 5.22656 5.26875 5.03906C5.34844 4.99218 6.04688 4.77187 7.79531 4.65468C9.40312 4.54687 11.1797 4.50468 12.0047 4.50468C12.8297 4.50468 14.6062 4.54687 16.2141 4.65468C17.9578 4.77187 18.6656 4.98749 18.7406 5.03906C19.1625 5.32968 19.7437 6.28124 19.9688 6.80624C20.1938 7.33124 20.4937 8.36249 20.4375 8.50312C20.3813 8.64374 20.4937 8.71406 19.7344 8.65312C18.9797 8.59687 14.2406 8.53593 12.0094 8.53593C9.78281 8.53593 5.04375 8.59687 4.28438 8.65312C3.525 8.70937 3.6375 8.64374 3.58125 8.50312C3.51562 8.36249 3.81562 7.33593 4.04062 6.80624ZM5.76562 12.675C5.42812 12.7594 5.22656 12.9422 4.80469 12.9375C4.38281 12.9375 3.24375 12.7453 3 12.7359C2.75625 12.7266 2.54063 12.9 2.41406 12.9328C2.2875 12.9656 2.03906 12.8766 1.66406 12.7594C1.28906 12.6422 1.06875 12.675 0.946875 12.1641C0.820313 11.6578 0.946875 10.9312 0.946875 10.9312C1.75781 10.8937 2.54063 10.9687 4.00781 11.3812C5.475 11.7937 6.29062 12.5859 6.29062 12.5859C6.29062 12.5859 6.10313 12.5906 5.76562 12.675ZM16.7906 16.3687C16.1203 16.4578 13.3125 16.4812 12 16.4812C10.6875 16.4812 7.87969 16.4531 7.20938 16.3687C6.525 16.2797 5.63438 15.4594 6.24844 14.8078C7.07812 13.9219 6.92344 13.95 8.80781 13.7062C10.4391 13.4953 11.6766 13.4859 12 13.4859C12.3188 13.4859 13.5609 13.5 15.1922 13.7062C17.0766 13.95 16.9219 13.9219 17.7516 14.8078C18.3656 15.4594 17.475 16.2797 16.7906 16.3687ZM23.0531 12.1687C22.9266 12.675 22.7109 12.6469 22.3359 12.7641C21.9609 12.8812 21.7125 12.9656 21.5859 12.9375C21.4594 12.9094 21.2437 12.7359 21 12.7406C20.7563 12.75 19.6172 12.9422 19.1953 12.9422C18.7734 12.9422 18.5719 12.7641 18.2344 12.6797C17.8969 12.5953 17.7094 12.5953 17.7094 12.5953C17.7094 12.5953 18.5203 11.7984 19.9922 11.3906C21.4594 10.9781 22.2422 10.9031 23.0531 10.9406C23.0531 10.9312 23.1797 11.6578 23.0531 12.1687Z" fill="white"/>
                                </svg>
                        </div>
                        <div class="statRight">
                            <p class="statName">Автомобильная всего</p>
                            <p class="statCount">0€</p>
                        </div>
                        <div class="adminList">
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                        </div>
                    </div>
                    <div class="pageStatItem _admin">
                        <div class="statIcon _purpleed">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4_291)">
                                <path d="M23.1825 7.19566L20.1469 6.1874L19.199 3.21063C19.1155 2.96219 18.9531 2.74791 18.7364 2.60053C18.5198 2.45315 18.2608 2.38076 17.9992 2.39442H15.9595L12.6599 0.197854C12.464 0.0687872 12.2346 0 12 0C11.7654 0 11.536 0.0687872 11.3401 0.197854L8.04054 2.39442H6.00082C5.73917 2.38076 5.48025 2.45315 5.2636 2.60053C5.04694 2.74791 4.88446 2.96219 4.80098 3.21063L3.85311 6.24742L0.817521 7.19566C0.569177 7.27918 0.354986 7.44172 0.207661 7.65846C0.0603354 7.8752 -0.0120249 8.13422 0.00163173 8.39597V22.7997C0.00163173 23.118 0.128043 23.4233 0.353056 23.6484C0.578069 23.8735 0.883252 24 1.20147 24H8.40049V16.7981C8.40049 16.4798 8.5269 16.1745 8.75191 15.9494C8.97693 15.7243 9.28211 15.5978 9.60033 15.5978H14.3997C14.7179 15.5978 15.0231 15.7243 15.2481 15.9494C15.4731 16.1745 15.5995 16.4798 15.5995 16.7981V24H22.7985C23.1167 24 23.4219 23.8735 23.6469 23.6484C23.872 23.4233 23.9984 23.118 23.9984 22.7997V8.39597C24.012 8.13422 23.9397 7.8752 23.7923 7.65846C23.645 7.44172 23.4308 7.27918 23.1825 7.19566ZM8.40049 10.7966C8.40049 11.1149 8.27408 11.4202 8.04907 11.6453C7.82405 11.8704 7.51887 11.9969 7.20065 11.9969C6.88244 11.9969 6.57725 11.8704 6.35224 11.6453C6.12723 11.4202 6.00082 11.1149 6.00082 10.7966V9.59628C6.00082 9.27794 6.12723 8.97264 6.35224 8.74753C6.57725 8.52243 6.88244 8.39597 7.20065 8.39597C7.51887 8.39597 7.82405 8.52243 8.04907 8.74753C8.27408 8.97264 8.40049 9.27794 8.40049 9.59628V10.7966ZM13.1998 10.7966C13.1998 11.1149 13.0734 11.4202 12.8484 11.6453C12.6234 11.8704 12.3182 11.9969 12 11.9969C11.6818 11.9969 11.3766 11.8704 11.1516 11.6453C10.9266 11.4202 10.8002 11.1149 10.8002 10.7966V9.59628C10.8002 9.27794 10.9266 8.97264 11.1516 8.74753C11.3766 8.52243 11.6818 8.39597 12 8.39597C12.3182 8.39597 12.6234 8.52243 12.8484 8.74753C13.0734 8.97264 13.1998 9.27794 13.1998 9.59628V10.7966ZM17.9992 10.7966C17.9992 11.1149 17.8728 11.4202 17.6478 11.6453C17.4227 11.8704 17.1176 11.9969 16.7993 11.9969C16.4811 11.9969 16.1759 11.8704 15.9509 11.6453C15.7259 11.4202 15.5995 11.1149 15.5995 10.7966V9.59628C15.5995 9.27794 15.7259 8.97264 15.9509 8.74753C16.1759 8.52243 16.4811 8.39597 16.7993 8.39597C17.1176 8.39597 17.4227 8.52243 17.6478 8.74753C17.8728 8.97264 17.9992 9.27794 17.9992 9.59628V10.7966Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_4_291">
                                <rect width="24" height="24" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                        </div>
                        <div class="statRight">
                            <p class="statName">Жилищная всего</p>
                            <p class="statCount">0€</p>
                        </div>
                        <div class="adminList">
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                        </div>
                    </div>
                    <div class="pageStatItem _admin">
                        <div class="statIcon _bluished">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.57143 4.8H15.4286V3H8.57143V4.8ZM24 13.8V20.55C24 21.1687 23.7902 21.6984 23.3705 22.1391C22.9509 22.5797 22.4464 22.8 21.8571 22.8H2.14286C1.55357 22.8 1.04911 22.5797 0.629464 22.1391C0.209821 21.6984 0 21.1687 0 20.55V13.8H9V16.05C9 16.2937 9.08482 16.5047 9.25446 16.6828C9.42411 16.8609 9.625 16.95 9.85714 16.95H14.1429C14.375 16.95 14.5759 16.8609 14.7455 16.6828C14.9152 16.5047 15 16.2937 15 16.05V13.8H24ZM13.7143 13.8V15.6H10.2857V13.8H13.7143ZM24 7.05V12.45H0V7.05C0 6.43125 0.209821 5.90156 0.629464 5.46093C1.04911 5.02031 1.55357 4.8 2.14286 4.8H6.85714V2.55C6.85714 2.175 6.98214 1.85625 7.23214 1.59375C7.48214 1.33125 7.78571 1.2 8.14286 1.2H15.8571C16.2143 1.2 16.5179 1.33125 16.7679 1.59375C17.0179 1.85625 17.1429 2.175 17.1429 2.55V4.8H21.8571C22.4464 4.8 22.9509 5.02031 23.3705 5.46093C23.7902 5.90156 24 6.43125 24 7.05Z" fill="white"/>
                                </svg>
                        </div>
                        <div class="statRight">
                            <p class="statName">Инвестиционная всего</p>
                            <p class="statCount">0€</p>
                        </div>
                        <div class="adminList">
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                            <div class="userItem"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a><p class="userCount">100€</p></div>
                        </div>
                    </div>
                </div>
                <h2 class="pageTitle displayFlex spaceBetween alignItemsCenter">
                    История операций
                    <div class="adminTable">
                        <a href="#" class="excelCreate">Создать Excel</a>
                        <a href="#" class="pdfCreate">Создать PDF</a>
                    </div>
                </h2>
                <div class="customTable">
                    <div class="customTableLine customTableHead">
                        <p class="customTableItem">Дата и время</p>
                        <p class="customTableItem">Имя и ID</p>
                        <p class="customTableItem">Операция</p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Вывод средств <span class="_greened">-100€</span></span></p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Оплата "Эконом” <span class="_reded">100€</span></span></p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Оплата "Эконом” <span class="_reded">100€</span></span></p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Оплата "Эконом” <span class="_reded">100€</span></span></p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Вывод средств <span class="_greened">-100€</span></span></p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Процент 1 линии <span class="_blueed">+40€</span></span></p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Процент 2 линии <span class="_blueed">+20€</span></span></p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Оплата "Эконом” <span class="_reded">100€</span></span></p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Оплата "Эконом” <span class="_reded">100€</span></span></p>
                    </div>
                    <div class="customTableLine">
                        <p class="customTableItem" aria-label="Дата и время">14 октября в 19:35</p>
                        <p class="customTableItem" aria-label="Имя и ID"><a href="ссылка авторизации" class="userLink">Иван Иванов (00034)</a></p>
                        <p class="customTableItem" aria-label="Операция"><span>Оплата "Эконом” <span class="_reded">100€</span></span></p>
                    </div>
                    <div class="paginationWrapper displayFlex alignItemsCenter spaceCenter">
                        <button class="prev displayFlex alignItemsCenter spaceCenter disabledPag">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.011 19.497L8.70297 12L16.011 4.50299C16.1418 4.36905 16.2151 4.18923 16.2151 4.00199C16.2151 3.81475 16.1418 3.63494 16.011 3.50099C15.9474 3.43614 15.8716 3.38461 15.7879 3.34944C15.7042 3.31426 15.6143 3.29614 15.5235 3.29614C15.4327 3.29614 15.3428 3.31426 15.2591 3.34944C15.1754 3.38461 15.0995 3.43614 15.036 3.50099L7.25997 11.4765C7.12345 11.6166 7.04705 11.8044 7.04705 12C7.04705 12.1956 7.12345 12.3834 7.25997 12.5235L15.0345 20.499C15.0981 20.5643 15.1741 20.6162 15.2581 20.6517C15.3421 20.6871 15.4323 20.7054 15.5235 20.7054C15.6146 20.7054 15.7049 20.6871 15.7889 20.6517C15.8728 20.6162 15.9489 20.5643 16.0125 20.499C16.1433 20.365 16.2166 20.1852 16.2166 19.998C16.2166 19.8108 16.1433 19.6309 16.0125 19.497L16.011 19.497Z" fill="#202020"/>
                                </svg>
                        </button>
                        <button id="1" class="active">1</button>
                        <button class="link">2</button>
                        <button class="next displayFlex alignItemsCenter spaceCenter link">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.98903 4.503L15.297 12L7.98903 19.497C7.85819 19.631 7.78495 19.8108 7.78495 19.998C7.78495 20.1852 7.85819 20.3651 7.98903 20.499C8.05257 20.5639 8.12842 20.6154 8.21213 20.6506C8.29584 20.6857 8.38573 20.7039 8.47653 20.7039C8.56733 20.7039 8.65721 20.6857 8.74092 20.6506C8.82463 20.6154 8.90048 20.5639 8.96403 20.499L16.74 12.5235C16.8765 12.3834 16.953 12.1956 16.953 12C16.953 11.8044 16.8765 11.6166 16.74 11.4765L8.96553 3.50101C8.90193 3.43569 8.8259 3.38378 8.74191 3.34833C8.65792 3.31288 8.56769 3.29462 8.47653 3.29462C8.38536 3.29462 8.29513 3.31288 8.21114 3.34833C8.12715 3.38378 8.05112 3.43569 7.98753 3.50101C7.85669 3.63495 7.78345 3.81476 7.78345 4.002C7.78345 4.18925 7.85669 4.36906 7.98753 4.503L7.98903 4.503Z" fill="#202020"/>
                                </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
