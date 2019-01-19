#include <iostream>
using namespace std;

float function_name (int idade){
	float Idade = idade * 2.3;

	return Idade;
}

int main() {
	/*        //math
    cout << "5 + 2 = " << 5+2 << endl;
    cout << "5 - 2 = " << 5-2 << endl;
    cout << "5 * 2 = " << 5*2 << endl;
    cout << "5 / 2 = " << 5/2 << endl; //retorna divisao
    cout << "5 % 2 = " << 5%2 << endl; //retorna resto
    */

	/*       //estruturas continuam padrao
    int age;
	for(int i = 0; i < 4; i++){
      switch (i){
        case 0:
          age = 19;
          break;
        case 1:
          age = 15;
          break;
        case 2:
          age = 150;
          break;
        case 3:
          age = -120;
          break;

        default:
          cout << "coise estranha aqui" << endl;
      }

      if ((age >= 18) && (age < 100))
      	cout << "vc pode ir tirar carteira :)" << endl;
      else if ((age > 0) && (age < 18))
      	cout << "vc não pode ir tirar carteira :/" << endl;
      else if (age >= 100)
      	cout << "vc é um vampiro? vampiros nao podem dirigir" << endl;
      else
      	cout << "seja la oque eh vc. vc nao pode dirigir" << endl;
    }
    */

	/*   //variable = (condition) ? true : false
    int dice = (5>2)? 5:2;
    cout << dice << endl;
    */

	/* //array
	int number[5]; //or
	int numberr[5] = {0, 1, 2, 3, 4};
	cout << numberr[2] << endl;

	char myName[10][10] = {{'W', 'E', 'S'},
			              {'M', 'A', 'T'}};
	cout << myName[0][2] << endl;
    */

	/*   //random number e ciclo while
    int randNum = (rand() % 100) + 1;
    while(randNum != 100){
      cout << randNum << ", \n";

      randNum = (rand() % 100) + 1;
    }
    */

	/*string seuNome;
	getline(cin, seuNome);  //entrada de dados
    */

	/*    //funcao esta padrao nego uhuhuhuhu
	int age = 19;
	float Age = function_name(age);
	cout << Age;
    */

	return 0;
}
















