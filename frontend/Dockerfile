# ベースイメージとして Node.js を使用
FROM node:20.12.2

# 作業ディレクトリの設定
WORKDIR /app

# package.jsonとpackage-lock.jsonをコピー
COPY package*.json ./

# 依存関係をインストール
RUN npm install

# ソースコードをコピー
COPY . .

# ビルド
RUN npm run build

# ポートを公開
EXPOSE 3000

# Next.jsアプリケーションを起動
CMD ["npm", "start"]