let teste = {
    '1':1,
    '2':2
}
console.log(teste)

Object.keys(teste).forEach(key => delete teste[key]);
    console.log('teste')

console.log(teste)
