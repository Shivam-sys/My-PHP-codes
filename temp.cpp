#include<iostream>
using namespace std;

class person{
    public:
    person(){
        cout<<"Person object created!"<<endl;
    }
};

class employee : public person{
    public:
    employee(){
        cout<<"Employee object created!"<<endl;
    }
};
int main(){
    employee e1;
return 0;
}