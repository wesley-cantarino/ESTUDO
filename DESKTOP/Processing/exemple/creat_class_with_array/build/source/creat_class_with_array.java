import processing.core.*; 
import processing.data.*; 
import processing.event.*; 
import processing.opengl.*; 

import java.util.HashMap; 
import java.util.ArrayList; 
import java.io.File; 
import java.io.BufferedReader; 
import java.io.PrintWriter; 
import java.io.InputStream; 
import java.io.OutputStream; 
import java.io.IOException; 

public class creat_class_with_array extends PApplet {

ball [] balls = new ball[200];
int tam = 0;

public void setup (){
  
  //frameRate(5);

  balls[tam] = new ball(random(50, width - 50), random(50, height - 50));
}

public void draw (){
  background(80, 20, 150);

  for(int i = 0; i <= tam; i++){
    balls[i].cinematic();
    balls[i].display();
  }
}

public void mousePressed(){
  tam++;
  balls[tam] = new ball(mouseX, mouseY);
}

class ball {
  PVector position;
  PVector speed = new PVector(0, 0);
  PVector grav = new PVector(0, 0.5f);

  ball(float mouserX, float mouserY){
    position = new PVector(mouserX, mouserY);
  }

  public void cinematic (){
    if ((position.y >= height - 10) && (0.8f * speed.y > 1)){
      speed.y = -0.8f * speed.y;
    }

    position.add(speed);
    speed.add(grav);
  }

  public void display (){
    ellipse(position.x, position.y, 20, 20);
  }
}
  public void settings() {  size(400, 300, P2D); }
  static public void main(String[] passedArgs) {
    String[] appletArgs = new String[] { "creat_class_with_array" };
    if (passedArgs != null) {
      PApplet.main(concat(appletArgs, passedArgs));
    } else {
      PApplet.main(appletArgs);
    }
  }
}
