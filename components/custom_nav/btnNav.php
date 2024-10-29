<div>
    <button class="btnNav">
        <?php include './components/svg/logo_btnNav.php'; ?>
    </button>
    <div class="backPanel exitMethod"></div>
    <div class="styleNav">

        <div class="styleNav_header">
            <button class="exitBtn exitMethod">
                <?php include './components/svg/logo_exitBtn.php'; ?>
            </button>
        </div>

        <div class="w-100 flex styleNav_navbar">
            <button class="colorsBtn">Цвета</button>
            <button class="fontsBtn">Размер шрифта</button>
        </div>
        <div class="styleNav_colors">
            <div class="styleNav_customBlock">
                <span>Прозрачность картинки:</span>
                <input class="rangeImg" type="range" min="0" max="10" step="1" value="100">
            </div>
            <div class="styleNav_customBlock">
                <span>Фон:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-body`)'}"></button>
                    <input class="--bg-body" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Шапка:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-header`)'}"></button>
                    <input class="--bg-header" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Логотп "МегаФон":</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-logoMega`)'}"></button>
                    <input class="--bg-logoMega" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Текст Логотпа "МегаФон":</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--color-logoMega`)'}"></button>
                    <input class="--color-logoMega" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Иконка "720":</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-icon_resolution`)'}"></button>
                    <input class="--bg-icon_resolution" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Текст Иконка "720":</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--color-icon_resolution`)'}"></button>
                    <input class="--color-icon_resolution" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Иконка "Время":</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-icon_time`)'}"></button>
                    <input class="--bg-icon_time" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Текст Иконка "Время":</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--color-icon_time`)'}"></button>
                    <input class="--color-icon_time" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Главный текст:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--color-mainText`)'}"></button>
                    <input class="--color-mainText" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Цена текст:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--color-price`)'}"></button>
                    <input class="--color-price" />
                </div>

            </div>
            <div class="styleNav_customBlock">
                <span>Главная кнопка:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-btn`)'}"></button>
                    <input class="--bg-btn" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Главная кнопка текст:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--color-btn`)'}"></button>
                    <input class="--color-btn" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Кнопка Отмена:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-cancel`)'}"></button>
                    <input class="--bg-cancel" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Кнопка Отмена текст:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--color-cancel`)'}"></button>
                    <input class="--color-cancel" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Загрузка фон:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-loaderUp`)'}"></button>
                    <input class="--bg-loaderUp" />
                </div>

            </div>
            <div class="styleNav_customBlock">
                <span>Загрузка:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-loaderUpAfter`)'}"></button>
                    <input class="--bg-loaderUpAfter" />
                </div>

            </div>
            <div class="styleNav_customBlock">
                <span>Нижняя часть загрузки:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-loaderDown`)'}"></button>
                    <input class="--bg-loaderDown" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Футер:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--bg-footer`)'}"></button>
                    <input class="--bg-footer" />
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Футер текст:</span>
                <div class="flex">
                    <button
                        data-jscolor="{preset: 'dark', value: '#ffffff90', onChange: 'update(this, `--color-footer`)'}"></button>
                    <input class="--color-footer" />
                </div>
            </div>
        </div>

        <div class="styleNav_fonts">
            <div class="styleNav_customBlock">
                <span>Компьютерная версия:</span>
                <div class="flex">
                    <select id="unitSelect">
                        <option selected>px</option>
                        <option>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="16" />
                    <button
                        onclick="saveFont('--page-desktop', this.previousElementSibling.value, document.getElementById('unitSelect').value)">Сохранить</button>
                </div>

            </div>
            <div class="styleNav_customBlock">
                <span>Горизонт:</span>
                <div class="flex">
                    <select id="unitSelect_2">
                        <option>px</option>
                        <option selected>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="2.3" />
                    <button
                        onclick="saveFont('--page-gorizont', this.previousElementSibling.value, document.getElementById('unitSelect_2').value)">Сохранить</button>
                </div>


            </div>
            <div class="styleNav_customBlock">
                <span>Ноутбуки:</span>
                <div class="flex">
                    <select id="unitSelect_3">
                        <option selected>px</option>
                        <option>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="12" />
                    <button
                        onclick="saveFont('--page-tablet', this.previousElementSibling.value, document.getElementById('unitSelect_3').value)">Сохранить</button>
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Телефоны:</span>
                <div class="flex">
                    <select id="unitSelect_4">
                        <option selected>px</option>
                        <option>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="11" />
                    <button
                        onclick="saveFont('--page-mobile', this.previousElementSibling.value, document.getElementById('unitSelect_4').value)">Сохранить</button>
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Маленькие телефоны:</span>
                <div class="flex">
                    <select id="unitSelect_5">
                        <option>px</option>
                        <option>vh</option>
                        <option selected>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="2" />
                    <button
                        onclick="saveFont('--page-small-mobile', this.previousElementSibling.value, document.getElementById('unitSelect_5').value)">Сохранить</button>
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Большие телефоны:</span>
                <div class="flex">
                    <select id="unitSelect_6">
                        <option selected>px</option>
                        <option>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="13" />
                    <button
                        onclick="saveFont('--page-large-mobile', this.previousElementSibling.value, document.getElementById('unitSelect_6').value)">Сохранить</button>
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Шапка телефоны:</span>
                <div class="flex">
                    <select id="unitSelect_7">
                        <option selected>px</option>
                        <option>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="10" />
                    <button
                        onclick="saveFont('--header-normal', this.previousElementSibling.value, document.getElementById('unitSelect_7').value)">Сохранить</button>
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Шапка пк:</span>
                <div class="flex">
                    <select id="unitSelect_8">
                        <option selected>px</option>
                        <option>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="14" />
                    <button
                        onclick="saveFont('--header-desktop', this.previousElementSibling.value, document.getElementById('unitSelect_8').value)">Сохранить</button>
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Шапка горизонт:</span>
                <div class="flex">
                    <select id="unitSelect_9">
                        <option>px</option>
                        <option selected>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="2" />
                    <button
                        onclick="saveFont('--header-gorizont', this.previousElementSibling.value, document.getElementById('unitSelect_9').value)">Сохранить</button>
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Кнопка:</span>
                <div class="flex">
                    <select id="unitSelect_10">
                        <option selected>px</option>
                        <option>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="10" />
                    <button
                        onclick="saveFont('--containerBtn-normal', this.previousElementSibling.value, document.getElementById('unitSelect_10').value)">Сохранить</button>
                </div>
            </div>
            <div class="styleNav_customBlock">
                <span>Кнопка горизонт:</span>
                <div class="flex">
                    <select id="unitSelect_11">
                        <option>px</option>
                        <option selected>vh</option>
                        <option>vw</option>
                    </select>
                    <input type="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')" value="2.3" />
                    <button
                        onclick="saveFont('--containerBtn-gorizont', this.previousElementSibling.value, document.getElementById('unitSelect_11').value)">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
</div>