

## Установка

    git clone https://github.com/staskarand1111/test_task.git
    поправить коннект к бд в .env
    php artisan migrate
    php artisan db:seed


## API

`GET /api/tariffs/{id}`

Успешный ответ приходит с кодом `200 OK` и содержит тело:
```json
{
	"data": {
		"id": 1,
		"name": "Base",
		"is_enabled": true,
		"max_daily_cost": 200000,
		"stage_tariffs": [{
			"id": 1,
			"tariff_id": 1,
			"stage_type": "reservation",
			"price": 200,
			"measure": "min",
			"params": {
				"tariff_start": "07:00",
				"tariff_end": "23:00"
			},
			"is_enabled": true
		}, {
			"id": 2,
			"tariff_id": 1,
			"stage_type": "review",
			"price": 700,
			"measure": "min",
			"params": {
				"counting_after": 7
			},
			"is_enabled": true
		}, {
			"id": 3,
			"tariff_id": 1,
			"stage_type": "parking",
			"price": 200,
			"measure": "min",
			"params": null,
			"is_enabled": true
		}, {
			"id": 4,
			"tariff_id": 1,
			"stage_type": "ride",
			"price": 800,
			"measure": "min",
			"params": null,
			"is_enabled": true
		}, {
			"id": 5,
			"tariff_id": 1,
			"stage_type": "ride",
			"price": 1000,
			"measure": "km",
			"params": {
				"counting_after": 70
			},
			"is_enabled": true
		}],
		"additional_options": [{
			"id": 1,
			"tariff_id": 1,
			"type": "baby_chair",
			"name": "Baby chair",
			"price": 200,
			"measure": "min",
			"params": {
				"rise_max_cost": 30000
			},
			"is_enabled": true
		}]
	}
}
```

