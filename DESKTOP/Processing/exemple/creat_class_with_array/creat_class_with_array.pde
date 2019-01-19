ball [] balls = new ball[200];
int tam = 0;

void setup (){
  size(400, 300, P2D);

  balls[tam] = new ball(random(50, width - 50), random(50, height - 50));
}

void draw (){
  background(80, 20, 150);

  for(int i = 0; i <= tam; i++){
    balls[i].cinematic();
    balls[i].display();
  }
}

void mousePressed(){
  tam++;
  balls[tam] = new ball(mouseX, mouseY);
}

class ball {
  PVector position;
  PVector speed = new PVector(0, 0);
  PVector grav = new PVector(0, 0.5);

  ball(float mouserX, float mouserY){
    position = new PVector(mouserX, mouserY);
  }

  void cinematic (){
    if ((position.y >= height - 10) && (0.8 * speed.y > 1)){
      speed.y = -0.8 * speed.y;
    }

    position.add(speed);
    speed.add(grav);
  }

  void display (){
    ellipse(position.x, position.y, 20, 20);
  }
}
