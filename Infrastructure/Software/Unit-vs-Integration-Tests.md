# Unit-vs-Integration-Tests.md

* https://www.youtube.com/watch?v=2vEoL3Irgiw
* https://www.youtube.com/watch?v=fr1E9aVnBxw

## [Unit tests](https://youtube.com/clip/UgkxfmFIn2KHp4nOMsJSQLxx_LnRKwVlShja)

* Isolated, simple as possible, fast. [Mock instead of real DB.](https://youtube.com/clip/UgkxfmFIn2KHp4nOMsJSQLxx_LnRKwVlShja)
* Tests should not depend on each other - can run in parallel, in any order, nearly everywhere.
* Tests exactly ONE (Unit).

## Examples
* https://www.youtube.com/watch?v=3kzHmaeozDI
* https://www.youtube.com/watch?v=iWtxEDE1IR4

```py
def test_add_numbers():
    assert add_numbers(2, 3) == 5
    assert add_numbers(-1, 5) == 4
```

```py
def test_sort_strings():
    assert sort_strings(['apple', 'banana', 'cherry']) == ['apple', 'banana', 'cherry']
    assert sort_strings(['cat', 'dog', 'bird']) == ['bird', 'cat', 'dog']
```

## Integration tests

Do the higher level testing, how interactions works.
So here we need to have the -real dependecies running - not mocked DB for example]((https://youtube.com/clip/UgkxfmFIn2KHp4nOMsJSQLxx_LnRKwVlShja).

```py
def test_login():
    # simulate entering username and password
    login_form.enter_username('test_user')
    login_form.enter_password('test_password')

    # simulate clicking the login button
    login_form.click_login_button()

    # assert that the user is logged in
    assert user_session.is_logged_in() == True
```

```py
def test_database_integration():
    # insert test data into the database
    database.insert_data('test_data')

    # load the web page that displays the data
    web_page.load_page()

    # assert that the data is displayed correctly
    assert web_page.get_data() == 'test_data'
```

## TIPS

* https://youtu.be/fr1E9aVnBxw?t=2438
* Avoid conditional assertion like if a > 4 assrtA else assert B. Instead move this to a separate test method.
* If pipeline fails, rollback first, ask questions later
