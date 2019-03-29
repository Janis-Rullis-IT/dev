# Sendgrid

* https://sendgrid.com/docs/API_Reference/api_v3.html
* API_KEY - more than 50 chars. Starts with SG.

## Test that the API key works

GET https://api.sendgrid.com/v3/templates

`Authorization: Bearer API_KEY`

> Without "".

### If correct

```json
{
    "templates": [
        {
            "id": "123-456-789-123-456",
            "name": "Templ1",
            "generation": "legacy",
            "versions": []
        }
    ]
}
```

### If incorrect

```json
{
    "errors": [
        {
            "field": null,
            "message": "access forbidden"
        }
    ]
}
```

## [Send](https://sendgrid.com/docs/API_Reference/api_v3.html)


* POST https://api.sendgrid.com/v3/mail/send

```json
{
  "personalizations": [
    {
      "to": [
        {
          "email": "john.doe@example.com"
        }
      ],
      "subject": "Hello, World!"
    }
  ],
  "from": {
    "email": "noreply@johndoe.com",
    "name": "John Doe"
  },
  "reply_to": {
    "email": "noreply@johndoe.com",
    "name": "John Doe"
  },
  "template_id": "d-8096b5dacb254c8b882816f22d1d11fe"
}
```

### Success

202 code with an empty body.

### Check

* https://app.sendgrid.com/email_activity

![1-sent-1.png](1-sent-1.png)