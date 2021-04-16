# Webhooks from SuiteCRM

[Github](https://github.com/SidorkinAlex/SuiteCRMWebHooks) | 
[Ru](#Вебхуки-для-SuiteCRM) |
[En](#Webhooks-from-SuiteCRM)

![image](http://web-seedteam.ru/wp-content/uploads/2021/04/screenshot-0.0.0.0-2021.04.15-23_18_20.png)
![image](http://web-seedteam.ru/wp-content/uploads/2021/04/screenshot-0.0.0.0-2021.04.15-23_43_05.png)

## support the project
https://yoomoney.ru/to/410013242088802

## поддержи проект
https://yoomoney.ru/to/410013242088802


## Installation

Before installation, you must make a backup copy of the system files!

To install, you need to download the latest version of the plugin from the link https://github.com/SidorkinAlex/SuiteCRMWebHooks/releases/download/1.0/Build.zip

Then in SuiteCRM open the Module Loader (Administration -> Module Loader)

Download package archive

Click the install button.


## Using
   
   The use of this module is assumed through the processes module.
   
   In the processes module, select the necessary conditions for calling WebHook.
   
   In the Actions section, specify the creation of the record and select the Web Hook Request module
   
   in the created record, in the URL field, specify the URL for the reverse search.
   
   in the fields " 01...100 key "specify the parameter key in the fields" 01...100value " specify the appropriate value (it can be pulled from the linked module)
   ```

Array
(
    [first_name] => Kilburn
    [last_name] => Micah
)


   ```
   For the convenience of viewing the execution results, it is also recommended to specify Name, but this is not necessary.
   
   In the "Request Type" field, select the json or form-data request type (if the type is not specified, the request will be sent as form data)
   
   and to send the request, specify the status "ready to send" (if you do not specify this status, the request will not be executed)
   
   If the field is 01...If 100key is empty, then the corresponding value is 01...100 value will not be sent.
   
   
   If you need to specify the value of a field in the url, such as id, then we recommend that you build the request in 2 stages
   
   1 at the first stage we collect the necessary data according to the condition and specify the in process status,
   
   2 at the second stage, we edit the record in the Web Hook Request module and collect the url field and change the status to " ready to send"
### Example
Consider an example:
you need to send a request to http://0.0.0.0/test/ID_Contact
with a post array

first_name = First Name Contact

last_name = Last Name Contact

to do this, we create a process in which the target module is Contacts and set the multiple launch checkbox.

![image](http://web-seedteam.ru/wp-content/uploads/2021/04/screenshot-0.0.0.0-2021.04.16-09_27_26.png)

In the Actions section, specify the necessary parameters

Next, we create a 2 process, which when creating an entry in the WEB_HOOKS_REQUEST module

![image](http://web-seedteam.ru/wp-content/uploads/2021/04/screenshot-0.0.0.0-2021.04.16-09_22_34.png)

with the condition that the name of the record matches the name specified in the first process.

in the actions we create CalculateFields at the beginning
in which we replace the value in the url with ID candidate

### License
MIT


# Вебхуки для SuiteCRM

[Github](https://github.com/SidorkinAlex/SuiteCRMWebHooks) | 
[Ru](#Вебхуки-для-SuiteCRM) |
[En](#Webhooks-from-SuiteCRM)

[Установка](#Установка)

## Установка

Перед установкой необходимо сделать резервную копию файлов системы!

Для установки необходимо скачать последную версию плагина по ссылке https://github.com/SidorkinAlex/SuiteCRMWebHooks/releases/download/1.0/Build.zip

Далее в SuiteCRM открыть Загрузчик модулей (Администрирование -> Загрузчик модулей)

Загрузить архив с пакетом

Нажать кнопку установить.

## Использование
   
   Использование данного модуля предполагается через модуль процессы.
   
   В модуле процессы выберите необходимые условия для вызова WebHook.
   
   В блоке Действия укажите создание записи и выбирете модуль Web Hook Request
   
   в создаваемой записи в поле URL укажите URL для обратного выхова
   
   в полях "01...100 key" укажите ключ параметра в полях "01...100value" укажите соответствующее значение (его можно подтянуть из связанного модуля)
   
   Для удобства просмотра результатов выполнения рекомендуется так же указать Name однако это не обязательно.
   
   В поле "Request Type" выберите тип запроса json или form-data (если тип не будет указан то запрос отправится в виде form data)
   
   и для отправки запроса укажите статус "ready to send" (если не указать этот статус то запрос не будет выполнен)
   
   Если поле 01...100key пусто, то соответствующее значение 01...100 value не будет отправлено.
   
   
   Если вам нужно указать в url значение какого-то поля, например id,то сборку запроса рекомендуется выполнять в 2 этапа
   
   1 на первом этапе по условию собираем нужные данные и указываем статус in process,
   
   2 на втором этапе резактируем запись в модуле Web Hook Request  и собираем поле url и изменяем статус на "ready to send"
   
### Рассмотрим пример

   необходимо отправлять запрос на http://0.0.0.0/test/ID_Contact
    с пост массивом
    
   first_name = First Name Contact
   
   last_name = Last Name Contact
    
   для этого создаем процесс, в котором целевым модулем является Contacts ставим чекбокс многократный запуск.
    
![image](http://web-seedteam.ru/wp-content/uploads/2021/04/screenshot-0.0.0.0-2021.04.16-09_27_26.png)

   В блоке Действия указываем необходимые параметры
    
   Далее создаем 2 процесс, который при создании записи в модуле WEBH_HOOKS_REQUEST 
    
![image](http://web-seedteam.ru/wp-content/uploads/2021/04/screenshot-0.0.0.0-2021.04.16-09_22_34.png)

   с условием, что Название записи совпадает с назваием указанным в первом процессе.
    
   в действиях создаем вначале Calculate Fields
   в котором заменфяем значение в url на ID candidate
    
   далее создаем действие изменение записи в котором меняем статус
    
