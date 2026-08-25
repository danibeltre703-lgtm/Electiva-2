from app import app


def test_hola_mundo():
    cliente = app.test_client()
    respuesta = cliente.get("/")

    assert respuesta.status_code == 200
    assert b"Hola Mundo" in respuesta.data