VERSION: 0.1

##   [/scores]

### Store Score [POST]

+ Request (application/json)

        {
            "alias": "کوروش",
            "time": "30",
            "game_id": "1"
        }

+ Response 200 (application/json)

        {
            "alias": "کوروش",
            "time": "30",
            "game_id": "1",
            "user_id": 1,
            "updated_at": "2020-04-02T17:59:52.000000Z",
            "created_at": "2020-04-02T17:59:52.000000Z",
            "id": 7
        }
