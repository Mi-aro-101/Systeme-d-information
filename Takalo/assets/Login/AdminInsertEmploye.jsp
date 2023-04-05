<%-- 
    Document   : AdminLogin
    Created on : 12 janv. 2023, 12:41:50
    Author     : MSI GF65
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <div id="formulaire">
        <form action="action">
            <p>Nom</p>
            <p><input type="text" name=""></p>
            <p>Prenom</p>
            <p><input type="text" name=""></p>
            <p>DateNaissance</p>
            <p><input type="date" name=""></p>
            <p>NiveauEtude</p>
                    <p><select>
                            <option>licence</option>
                            <option>Master</option>
                            <option>Doctorat</option>
                </select></p>
            <p>Specialite</p>
            <table>
                <tr>
                    <td>
                        <div><input type="radio" name="">Photocopie</div>
                        
                    </td>
                    <td>
                        <div><input type="radio" name="">Factures</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div><input type="radio" name="">Faire-part</div>
                        
                    </td>
                    <td>
                        <div><input type="radio" name="">Cartes d'invitations</div>
                    </td>
                </tr>
            </table>
            
            <input type="submit" valuer=ajouter">
        </form>
        </div>
    </body>
</html>
