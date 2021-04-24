/*Constantes*/

var pemModulus = 'EDF35A4FABB826C27E0DE629F5BF27451A0F3007BC979EB0F6AA9C92F1DCE5EC729E6826CEF0CCEE87BAAEE4AF4016E96C2FC2D40C138F3444981978962D3C02BB5E5D8A218149637737C4C0041D90286584BE39F396EAA62EA165A66D663FFBB29F24508948DF62B452E3C8E809DD9E767373DB95D49AAB48FB72DBA3883E95EABC41EF78076639392D6186DDA30288E83B2D69ED45668CD4BFAE058738839D2D4A3D7600A7710CD9C704CF40CA1324070A8178D07353E0D93A9C89C77668D6D53AB32BDE6147EBF2358D146927BE8E7D3992C17E7C1721D935649E936A5C626B95B90E09FF0EDAC9E5392DFFF15E7F6CD8D01E22B5960281738251F7C4B659';

var bitSize = 2048;

var exponent = "10001"; 

function encrypt_bytes(bytes_to_encrypt){
    setMaxDigits(262);
    var key = new RSAKeyPair(exponent, exponent, pemModulus, bitSize);
    var ciphertext = encryptedString(key, bytes_to_encrypt, RSAAPP.PKCS1Padding, RSAAPP.RawEncoding);
    return ciphertext;
}
