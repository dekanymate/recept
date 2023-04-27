import React, { useState, useEffect } from 'react';
import './RecipesTable.css';
import receptekApi from '../api/receptek-api';

const ReceptTabla = () => {
  const [recipes, setReceptek] = useState([]);
  const [selectedRecipeIndex, setSelectedRecipeIndex] = useState(-1);



  useEffect(() => {
    const fetchReceptek = async () => {
      try {
        const response = await receptekApi.getReceptek();
        setReceptek(response.data);
      } catch (error) {
        console.error(error);
      }
    };

    fetchReceptek();
  }, []);

  const handleRowClick = index => {
    setSelectedRecipeIndex(index);
  };

  return (
    <>
      <table className="recipes-table">
        <thead>
          <tr>
            <th>Név</th>
            <th>Kategória</th>
            <th>Kép</th>
            <th>Leírás</th>
          </tr>
        </thead>
        <tbody>
          {recipes.map((recept, index) => (
            <tr key={recept.id} onClick={() => handleRowClick(index)}>
              <td>{recept.nev}</td>
              <td>{recept.kat_id}</td>
              <td>
                <img src={recept.kep_eleresi_ut} alt={recept.nev} />
              </td>
              <td>{recept.leiras}</td>
            </tr>
          ))}
        </tbody>
      </table>
      {selectedRecipeIndex !== -1 && (
        <div>
          <h3>{recipes[selectedRecipeIndex].nev}</h3>
          <img src={recipes.kep_eleresi_ut} alt={recipes.nev}></img>
          <p>{recipes[selectedRecipeIndex].leiras}</p>
        </div>
      )}
    </>
  );
};

export default ReceptTabla;
