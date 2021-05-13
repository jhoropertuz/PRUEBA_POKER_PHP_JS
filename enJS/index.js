function esEscalera(cartas){
    /* DEFINIR SI UNA LISTA DE CARTAS CONTIENE ESCALERAS*/
    let nCartas=cartas.length;
    if(nCartas>=5 && nCartas<=7 ){
       let countEscala=1;
       if(cartas.indexOf(14)!=-1){cartas.push(1);nCartas++;}
       let cartasOrdenadas=cartas.sort((a,b)=>a-b);
       for(let posicionCarta=0;posicionCarta<nCartas;posicionCarta++){
           if(posicionCarta>0){
               if(cartasOrdenadas[posicionCarta-1]+1==cartasOrdenadas[posicionCarta]){
                   countEscala++;
                   if(countEscala==5)return true;
               }else{
                   countEscala=1;
               }
           }
       }
        return false;
    }else{
        return false;
    }
  }
  
  console.log(esEscalera([2,3,4,5,6]));
  console.log(esEscalera([14,5,4,2,3]));
  console.log(esEscalera([7,7,12,11,3,4,14]));
  console.log(esEscalera([7,3,2]));
  console.log(esEscalera([2,7,8,5,10,9,11]));