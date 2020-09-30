# Laravel 8 把 Artisan 指令加入排程以次分鐘的頻率運行

引入 spatie 的 laravel-short-schedule 套件來擴增排程以次分鐘的頻率運行 Artisan 指令，例如需要執行更高頻率的操作（例如每秒執行一次）。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行 __Artisan__ 指令的 __short-schedule__ 來衡量排定的高頻率任務並執行預定任務。
```sh
$ php artisan short-schedule:run
```

----

## 畫面截圖
![](https://i.imgur.com/XbVSzMX.png)
> 每秒呼叫 Laravel 指令排程器

![](https://i.imgur.com/NugAhCR.png)
> 執行指令