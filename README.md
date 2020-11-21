<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Api Project Template</h1>
    <br>
</p>

## Install

```
$ composer create-project success/yii2-app-api
```

## Init

```
$ cd yii2-app-api
$ php init
```

## Run

```
$ php yii serve -t @api/public
```

## api tests

```
# init codeception
$ php vendor/bin/codecept bootstrap

# init api suite
$ php vendor/bin/codecept g:suite api ApiTester

# run api tests
$ php vendor/bin/codecept run api
```
