import turtle

# Configurar la ventana de dibujo
screen = turtle.Screen()
screen.bgcolor("black")

# Crear el objeto para dibujar
pen = turtle.Turtle()
pen.shape("turtle")
pen.speed(2)

# Configurar el color del corazón
color_rojo = "#FF0000"
color_sombra = "#F9AFAF"

# Dibujar la sombra
pen.penup()
pen.goto(-50, -120)
pen.pendown()
pen.color(color_sombra)
pen.begin_fill()
pen.left(140)
pen.forward(180)
pen.circle(-90, 200)
pen.left(120)
pen.circle(-90, 200)
pen.forward(180)
pen.end_fill()

# Dibujar el corazón
pen.penup()
pen.goto(-50, -120)
pen.pendown()
pen.color(color_rojo)
pen.begin_fill()
pen.left(140)
pen.forward(180)
pen.circle(-90, 200)
pen.left(120)
pen.circle(-90, 200)
pen.forward(180)
pen.end_fill()

# Ocultar el objeto para dibujar
pen.hideturtle()

# Mantener la ventana abierta
turtle.done()